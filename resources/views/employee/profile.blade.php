@extends('layouts.employee')

@section('title', 'Profil Saya')

@section('content')
    <div class="card">
        <div class="profile-banner"></div>
        <div class="card-body pt-0">
            <div class="d-flex flex-column flex-md-row align-items-center">
                <img src="https://placehold.co/150x150/3B82F6/FFFFFF?text=BS" class="profile-picture" alt="Foto Profil">
                <div class="ms-md-4 text-center text-md-start mt-3 mt-md-0">
                    <h2 class="fw-bold mb-0">{{ $data['nama'] }}</h2>
                    <p class="text-muted">{{ $data['status_jabatan'] }}</p>
                </div>
                <div class="ms-md-auto mt-3 mt-md-0">
                    <button class="btn btn-primary"><i class="fas fa-pencil-alt me-2"></i>Edit Profil</button>
                </div>
            </div>
            <hr class="my-4">
            <h5 class="mb-3">Data Pribadi</h5>
            <table class="table table-borderless">
                <tr>
                    <th style="width: 150px;">NIK</th>
                    <td>: {{ $data['nik'] }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>: {{ $data['email'] }}</td>
                </tr>
                <tr>
                    <th>Nomor Telepon</th>
                    <td>: {{ $data['telepon'] }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>: {{ $data['alamat'] }}</td>
                </tr>
                <tr>
                    <th>Tanggal Masuk</th>
                    <td>: {{ $data['tanggal_masuk'] }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
