@extends('layouts.app')

@section('title', 'Penggajian')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Proses Penggajian</h1>
        <p class="text-muted">Lakukan proses penggajian bulanan dengan mudah.</p>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row g-3 align-items-center">
                <div class="col-md-4">
                    <label for="bulan-gaji" class="form-label fw-semibold">Pilih Periode</label>
                    <input type="month" id="bulan-gaji" class="form-control" value="2025-07">
                </div>
                <div class="col-md-auto ms-auto align-self-end">
                    <button class="btn btn-primary"><i class="fas fa-cogs me-2"></i>Proses Gaji Bulan Ini</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Gaji Pokok</th>
                            <th>Tunjangan</th>
                            <th>Potongan</th>
                            <th>Total Gaji</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ahmad Subarjo</td>
                            <td>Rp 15.000.000</td>
                            <td>Rp 2.000.000</td>
                            <td>Rp 500.000</td>
                            <td class="fw-bold">Rp 16.500.000</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-print me-1"></i>Cetak
                                    Slip</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Siti Aminah</td>
                            <td>Rp 12.000.000</td>
                            <td>Rp 1.500.000</td>
                            <td>Rp 250.000</td>
                            <td class="fw-bold">Rp 13.250.000</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-print me-1"></i>Cetak
                                    Slip</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Budi Santoso</td>
                            <td>Rp 8.000.000</td>
                            <td>Rp 1.000.000</td>
                            <td>Rp 800.000</td>
                            <td class="fw-bold">Rp 8.200.000</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-print me-1"></i>Cetak
                                    Slip</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
