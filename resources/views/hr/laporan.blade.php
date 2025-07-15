@extends('layouts.app')

@section('title', 'Laporan')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Pusat Laporan</h1>
        <p class="text-muted">Analisis dan unduh data HR perusahaan Anda.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="fas fa-calendar-alt fa-3x text-primary"></i>
                    </div>
                    <h5 class="card-title">Laporan Kehadiran</h5>
                    <p class="card-text text-muted small">Rekapitulasi kehadiran, keterlambatan, dan absensi karyawan per
                        periode.</p>
                    <a href="#" class="btn btn-outline-primary mt-2">Buat Laporan</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="fas fa-money-bill-wave fa-3x text-success"></i>
                    </div>
                    <h5 class="card-title">Laporan Penggajian</h5>
                    <p class="card-text text-muted small">Rincian total gaji, tunjangan, dan potongan yang dibayarkan setiap
                        bulan.</p>
                    <a href="#" class="btn btn-outline-primary mt-2">Buat Laporan</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="fas fa-users-cog fa-3x text-warning"></i>
                    </div>
                    <h5 class="card-title">Laporan Data Karyawan</h5>
                    <p class="card-text text-muted small">Ekspor data lengkap seluruh karyawan aktif maupun non-aktif.</p>
                    <a href="#" class="btn btn-outline-primary mt-2">Buat Laporan</a>
                </div>
            </div>
        </div>
    </div>
@endsection
