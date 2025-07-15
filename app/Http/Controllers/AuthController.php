<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $supabaseUrl = 'https://tpbebbcwmowyvbbvkbjw.supabase.co';
        $anonKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA';

        $response = Http::withHeaders([
            'apikey' => $anonKey,
            'Authorization' => 'Bearer ' . $anonKey,
            'Content-Type' => 'application/json'
        ])->post($supabaseUrl . '/rest/v1/rpc/login_user', [
            'email_input' => $request->email,
            'password_input' => $request->password
        ]);

        if ($response->successful() && $response->json('success') === true) {
            $user = $response->json();

            session([
                'user_id' => $user['user_id'],
                'employee_id' => $user['employee_id'],
                'email' => $user['email'],
                'nama' => $user['nama'],
                'role' => $user['role']
            ]);

            // Arahkan sesuai role
            switch ($user['role']) {
                case 1:
                    return redirect('/hr/dashboard')->with('success', 'Login sebagai HR');
                case 2:
                    return redirect('/employee/dashboard')->with('success', 'Login sebagai Employee');
                case 0:
                    return redirect('/admin/dashboard')->with('success', 'Login sebagai Admin');
                default:
                    return redirect('/')->with('error', 'Role tidak dikenali');
            }
        }

        return back()->with('error', 'Login gagal: ' . $response->json('message', 'Cek email atau password'));
    }

    public function logout(Request $request)
{
    $userId = session('user_id');

    if (!$userId) {
        return redirect('/login')->with('error', 'Tidak ada sesi login yang ditemukan.');
    }
    $response = Http::withHeaders([
        'apikey' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Content-Type' => 'application/json'
    ])->post('https://tpbebbcwmowyvbbvkbjw.supabase.co/rest/v1/rpc//logout_user', [
        'user_id_input' => $userId
    ]);

    if ($response->successful()) {
        Session::flush();

        return redirect('/login')->with('success', 'Berhasil logout.');
    } else {
        return redirect()->back()->with('error', 'Gagal logout.');
    }
}

}
