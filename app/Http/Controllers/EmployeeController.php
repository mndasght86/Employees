<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmployeeController extends Controller
{
    public function dashboard()
{
    $employeeId = session('employee_id');
    $bulan = date('n');
    $tahun = date('Y');

    $response = Http::withHeaders([
        'apikey' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Content-Type' => 'application/json'
    ])->post('https://tpbebbcwmowyvbbvkbjw.supabase.co/rest/v1/rpc/rekap_absensi', [
        'employee_id_input' => $employeeId,
        'bulan_input' => $bulan,
        'tahun_input' => $tahun
    ]);

    if ($response->successful()) {
        $json = $response->json();

        $hadir = $json['hadir'] ?? 0;
        $izin = $json['izin'] ?? 0;
        $sakit = $json['sakit'] ?? 0;
        $alfa  = $json['alfa'] ?? 0;
        $hariKerja = $json['hari_kerja'] ?? 0;

        return view('employee.dashboard', compact('hadir', 'izin', 'sakit', 'alfa', 'hariKerja', 'bulan', 'tahun'));
    }

    return view('employee.dashboard')->with('error', 'Gagal mengambil data absensi.');
}
    public function profil()
    {
        $userId = session('user_id');
        $response = Http::withHeaders([
        'apikey' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Content-Type' => 'application/json'
    ])->post('https://tpbebbcwmowyvbbvkbjw.supabase.co/rest/v1/rpc/list_user', [
            'user_id_input' => $userId
        ]);

        if ($response->successful()) {
            $data = $response->json();

            return view('employee.profile', compact('data'));
        }

        return back()->with('error', 'Gagal mengambil data profil.');
    }
    public function absensi()
    {
        $employeeId = session('employee_id');
        $limit = 10;

        $response = Http::withHeaders([
        'apikey' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Content-Type' => 'application/json'
    ])->post('https://tpbebbcwmowyvbbvkbjw.supabase.co/rest/v1/rpc/get_attendance_by_employee', [
            'employee_id_input' => $employeeId,
            'limit_n' => $limit
        ]);

        $riwayat = [];

    if ($response->successful()) {
        $json = $response->json();
        if (isset($json['success']) && $json['success'] === true && isset($json['data'])) {
            $riwayat = $json['data'];
        }
    }

        return view('employee.absensi', compact('riwayat'));
    }
    public function slipgaji()
    {
        return view('employee.slipgaji');
    }
    public function riwayatCuti()
    {
        return view('employee.cuti');
    }
    public function absenMasuk(Request $request)
    {
        $employeeId = session('employee_id');

        $response = Http::withHeaders([
        'apikey' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Content-Type' => 'application/json'
    ])->post('https://tpbebbcwmowyvbbvkbjw.supabase.co/rest/v1/rpc/absen_user', [
            'employee_id_input' => $employeeId
        ]);

        return redirect()->back();
    }

    public function absenPulang(Request $request)
    {
        $employeeId = session('employee_id');

        $response = Http::withHeaders([
        'apikey' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Content-Type' => 'application/json'
    ])->post('https://tpbebbcwmowyvbbvkbjw.supabase.co/rest/v1/rpc/absen_pulang', [
            'employee_id_input' => $employeeId
        ]);

        return redirect()->back();
    }

}
