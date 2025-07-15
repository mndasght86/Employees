@extends('layouts.app')

@section('title', 'Data Karyawan')

@section('content')
    <div class="page-header d-flex justify-content-between align-items-center">
        <div>
            <h1 class="page-title">Data Karyawan</h1>
            <p class="text-muted">Kelola semua data karyawan di perusahaan Anda.</p>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKaryawanModal">
            <i class="fas fa-plus me-2"></i>Tambah Karyawan
        </button>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['jabatan'] }}</td>
                            <td><span class="badge bg-success-subtle text-success-emphasis rounded-pill">{{ $item['status'] }}</span></td>
                            <td class="text-center action-buttons">
                                <button class="btn btn-sm btn-outline-primary me-2"><i
                                        class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    <!-- Modal Tambah Karyawan -->
    <div class="modal fade" id="tambahKaryawanModal" tabindex="-1" aria-labelledby="tambahKaryawanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="border-radius: 1rem;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahKaryawanModalLabel">Formulir Tambah Karyawan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama-karyawan" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama-karyawan" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jabatan-karyawan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan-karyawan" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email-karyawan" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email-karyawan" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="status-karyawan" class="form-label">Status</label>
                                <select class="form-select" id="status-karyawan">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Non-Aktif">Non-Aktif</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tanggal-bergabung" class="form-label">Tanggal Bergabung</label>
                                <input type="date" class="form-control" id="tanggal-bergabung" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </div>
    </div>
@endsection
