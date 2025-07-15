@extends('layouts.app')

@section('title', 'Rekap Absensi')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Rekap Absensi</h1>
        <p class="text-muted">Pantau dan kelola kehadiran karyawan harian.</p>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row g-3 align-items-center">
                <form method="GET" action="{{ route('hr.absensi') }}">
                    <div class="col-md-4">
                        <label for="filter-tanggal" class="form-label fw-semibold">Pilih Tanggal</label>
                        <input type="date" id="filter-tanggal" name="tanggal" class="form-control"
                            value="{{ request('tanggal', date('Y-m-d')) }}">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Lihat Rekap</button>
                </form>

                <div class="col-md-auto ms-auto align-self-end">
                    <button class="btn btn-outline-success me-2"><i class="fas fa-file-excel me-2"></i>Export Excel</button>
                    <button class="btn btn-outline-danger"><i class="fas fa-file-pdf me-2"></i>Export PDF</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Hadir</th>
                            <th>Ijin</th>
                            <th>Sakit</th>
                            <th>Alfa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item['nama'] }}</td>
                                <td>{{ $item['hadir'] }}</td>
                                <td>{{ $item['izin'] }}</td>
                                <td>{{ $item['sakit'] }}</td>
                                <td>{{ $item['alfa_sampai_hari_ini'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
