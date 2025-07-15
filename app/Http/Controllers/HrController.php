<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HrController extends Controller
{
    public function dashboard() {
        $data = [];
        $tanggal = null;
        $total_karyawan = 0;
        $jumlah_hadir = 0;

        $response = Http::withHeaders([
            'apikey' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
            'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
            'Content-Type' => 'application/json'
        ])->post('https://tpbebbcwmowyvbbvkbjw.supabase.co/rest/v1/rpc/kehadiran_hari_ini');

        if ($response->successful()) {
            $json = $response->json();

            if (isset($json['success']) && $json['success'] === true) {
                $data = $json['data'] ?? [];
                $tanggal = $json['tanggal'] ?? null;
                $total_karyawan = $json['total_karyawan'] ?? 0;
                $jumlah_hadir = $json['jumlah_hadir'] ?? 0;
            } else {
                session()->flash('error', 'Respons API tidak sesuai format.');
            }
        } else {
            session()->flash('error', 'Gagal mengambil data kehadiran.');
        }

        return view('hr.dashboard', compact('data', 'tanggal', 'total_karyawan', 'jumlah_hadir'));
    }




    public function karyawan() {
        $response = Http::withHeaders([
        'apikey' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Content-Type' => 'application/json'
    ])->get('https://tpbebbcwmowyvbbvkbjw.supabase.co/rest/v1/rpc/list_all_users');

    if ($response->successful()) {
        $data = $response->json();
    } else {
        $data = [];
        session()->flash('error', 'Gagal mengambil data pegawai.');
    }

    return view('hr.karyawan', compact('data'));
    }

    public function absensi(Request $request) {
        $tanggalInput = $request->input('tanggal', date('Y-m-d'));

        $tanggal = date_create($tanggalInput);
        $bulan = (int) date_format($tanggal, 'n');
        $tahun = (int) date_format($tanggal, 'Y');
        $response = Http::withHeaders([
        'apikey' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwYmViYmN3bW93eXZiYnZrYmp3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTI1NTgzNTMsImV4cCI6MjA2ODEzNDM1M30.Av8FiloRdqrMG_7u6DXvh4gOjesdsrUhFIVLP61d9lA',
        'Content-Type' => 'application/json'
    ])->post('https://tpbebbcwmowyvbbvkbjw.supabase.co/rest/v1/rpc/rekap_bulanan_semua_karyawan', [
            'bulan_input' => $bulan,
            'tahun_input' => $tahun
        ]);
        if ($response->successful()) {
            $json = $response->json();


            if (isset($json['success']) && $json['success'] === true && isset($json['data'])) {
                $data = $json['data'];
                $hariKerja = $json['hari_kerja'] ?? 0;
                $hariKerjaSampaiHariIni = $json['hari_kerja_sampai_hari_ini'] ?? 0;

                return view('hr.absensi', compact(
                    'data', 'bulan', 'tahun', 'hariKerja', 'hariKerjaSampaiHariIni', 'tanggalInput'
                ));
            }

            session()->flash('error', 'Respons dari API tidak sesuai format.');
        } else {
            session()->flash('error', 'Gagal mengambil data dari API.');
    }

    return redirect()->back();
    }

    public function penggajian() {
        return view('hr.penggajian');
    }

    public function laporan() {
        return view('hr.laporan');
    }

}
