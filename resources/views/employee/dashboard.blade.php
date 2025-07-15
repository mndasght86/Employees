@extends('layouts.employee')

@section('title', 'Dashboard')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Dashboard</h1>
        <p class="text-muted">Halo Budi, selamat datang kembali!</p>
    </div>
    <div class="row g-4">
        <!-- Kehadiran -->
        <div class="col-md-6 col-lg-3">
            <div class="info-card">
                <div class="icon-box bg-success-subtle text-success"><i class="fas fa-check"></i></div>
                <div>
                    <p class="text-muted mb-0">Hadir</p>
                    <h4 class="fw-bold mb-0">{{ $hadir }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="info-card">
                <div class="icon-box bg-warning-subtle text-warning"><i class="fas fa-exclamation"></i></div>
                <div>
                    <p class="text-muted mb-0">Izin</p>
                    <h4 class="fw-bold mb-0">{{ $izin }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="info-card">
                <div class="icon-box bg-danger-subtle text-danger"><i class="fas fa-times"></i></div>
                <div>
                    <p class="text-muted mb-0">Sakit</p>
                    <h4 class="fw-bold mb-0">{{ $sakit }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="info-card">
                <div class="icon-box bg-primary-subtle text-primary"><i class="fas fa-calendar-day"></i></div>
                <div>
                    <p class="text-muted mb-0">Alfa</p>
                    <h4 class="fw-bold mb-0">{{ $alfa }}</h4>
                </div>
            </div>
        </div>

        <!-- Aksi Cepat -->
        <div class="col-lg-5">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Aksi Cepat</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-3">
                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-calendar-plus me-2"></i>Ajukan
                            Cuti</a>
                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-file-alt me-2"></i>Ajukan
                            Izin/Sakit</a>
                        <a href="{{ route('employee.slipgaji') }}" class="btn btn-outline-secondary"><i
                                class="fas fa-receipt me-2"></i>Lihat Slip Gaji Terakhir</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gaji Terakhir -->
        <div class="col-lg-7">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informasi Gaji Terakhir (Juni 2025)</h5>
                </div>
                <div class="card-body d-flex flex-column justify-content-center">
                    <p class="text-muted mb-1">Gaji Bersih Diterima</p>
                    <h2 class="fw-bolder text-success display-5 mb-3">Rp 8.200.000</h2>
                    <div class="d-flex justify-content-between text-muted">
                        <span><i class="fas fa-plus-circle text-primary"></i> Total Penerimaan: Rp 8.500.000</span>
                        <span><i class="fas fa-minus-circle text-danger"></i> Total Potongan: Rp 300.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
