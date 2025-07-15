@extends('layouts.employee')

@section('title', 'Slip Gaji')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Slip Gaji</h1>
        <p class="text-muted">Lihat rincian gaji Anda setiap bulan.</p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Pilih Periode</h5>
                </div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">Juni 2025</h6>
                            <small>Aktif</small>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">Mei 2025</h6>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">April 2025</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Detail Slip Gaji - Juni 2025</h5>
                    <button class="btn btn-sm btn-primary"><i class="fas fa-download me-2"></i>Unduh PDF</button>
                </div>
                <div class="card-body">
                    <h6>Penerimaan</h6>
                    <table class="table table-sm table-borderless">
                        <tbody>
                            <tr>
                                <td>Gaji Pokok</td>
                                <td class="text-end">Rp 8.000.000</td>
                            </tr>
                            <tr>
                                <td>Tunjangan Transport</td>
                                <td class="text-end">Rp 500.000</td>
                            </tr>
                            <tr class="fw-bold border-top">
                                <td>Total Penerimaan</td>
                                <td class="text-end">Rp 8.500.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <h6 class="mt-4">Potongan</h6>
                    <table class="table table-sm table-borderless">
                        <tbody>
                            <tr>
                                <td>BPJS Kesehatan</td>
                                <td class="text-end">Rp 150.000</td>
                            </tr>
                            <tr>
                                <td>BPJS Ketenagakerjaan</td>
                                <td class="text-end">Rp 150.000</td>
                            </tr>
                            <tr class="fw-bold border-top">
                                <td>Total Potongan</td>
                                <td class="text-end">Rp 300.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="d-flex justify-content-between fw-bold fs-5 mt-3">
                        <span>Gaji Bersih (Take Home Pay)</span>
                        <span class="text-success">Rp 8.200.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
