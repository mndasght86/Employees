@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Dashboard</h1>
        <p class="text-muted">Selamat datang kembali, {{ session('nama') }}!</p>
    </div>
    <div class="row g-4">
        <!-- Stat Cards -->
        <div class="col-md-6 col-xl-3">
            <div class="card stat-card bg-gradient-primary">
                <div class="card-body">
                    <div class="stat-value">{{ $total_karyawan }}</div>
                    <div class="stat-label">Total Karyawan</div>
                    <i class="fas fa-users stat-icon"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card stat-card bg-gradient-success">
                <div class="card-body">
                    <div class="stat-value">{{ $jumlah_hadir }}</div>
                    <div class="stat-label">Masuk Hari Ini</div>
                    <i class="fas fa-user-check stat-icon"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card stat-card bg-gradient-warning text-dark">
                <div class="card-body">
                    <div class="stat-value">Rp 10M</div>
                    <div class="stat-label">Gaji Dibayarkan</div>
                    <i class="fas fa-wallet stat-icon"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card stat-card bg-gradient-danger">
                <div class="card-body">
                    <div class="stat-value">5</div>
                    <div class="stat-label">Kontrak Akan Habis</div>
                    <i class="fas fa-file-signature stat-icon"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Pengingat Kontrak -->
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title mb-0">Absensi Karyawan</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Keterangan</th>
                            <th>Jam Masuk</th>
                            <th>Jam Pulang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['keterangan'] }}</td>
                            <td>{{ $item['jam_masuk'] }}</td>
                            <td>{{ $item['jam_keluar'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
