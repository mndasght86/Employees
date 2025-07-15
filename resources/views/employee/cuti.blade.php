@extends('layouts.employee')

@section('title', 'Riwayat Cuti')

@section('content')
    <div class="page-header d-flex justify-content-between align-items-center">
        <div>
            <h1 class="page-title">Informasi Cuti</h1>
            <p class="text-muted">Ajukan dan lihat riwayat cuti Anda di sini.</p>
        </div>
        <button class="btn btn-primary"><i class="fas fa-plus me-2"></i>Ajukan Cuti Baru</button>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <div class="row align-items-center text-center">
                <div class="col-md-6">
                    <p class="text-muted mb-1">Sisa Cuti Tahunan 2025</p>
                    <h2 class="fw-bolder display-4 text-primary">8 <span class="fs-5">Hari</span></h2>
                </div>
                <div class="col-md-6 border-md-start">
                    <p class="text-muted mb-1">Cuti Terpakai</p>
                    <h2 class="fw-bolder display-4">4 <span class="fs-5">Hari</span></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Riwayat Pengajuan Cuti</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Jenis Cuti</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Jumlah Hari</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cuti Tahunan</td>
                            <td>24 April 2025</td>
                            <td>25 April 2025</td>
                            <td>2</td>
                            <td><span class="badge bg-success-subtle text-success-emphasis rounded-pill">Disetujui</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Cuti Sakit</td>
                            <td>10 Maret 2025</td>
                            <td>10 Maret 2025</td>
                            <td>1</td>
                            <td><span class="badge bg-success-subtle text-success-emphasis rounded-pill">Disetujui</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Cuti Tahunan</td>
                            <td>01 Februari 2025</td>
                            <td>01 Februari 2025</td>
                            <td>1</td>
                            <td><span class="badge bg-danger-subtle text-danger-emphasis rounded-pill">Ditolak</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
