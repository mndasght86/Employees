@extends('layouts.employee')

@section('title', 'Absensi Harian')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Absensi Harian</h1>
    </div>
    <div class="row g-4">
        <div class="col-lg-5">
            <div class="clock-container">
                <div id="clock-time" class="clock-time">--:--:--</div>
                <div id="clock-date" class="clock-date">Memuat...</div>
            </div>
            <div class="d-grid gap-3 mt-4">
                <!-- Form Absen Masuk -->
                <form action="{{ url('/employee/absen-masuk') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success btn-absen">
                        <i class="fas fa-sign-in-alt me-2"></i>Absen Masuk
                    </button>
                </form>

                <!-- Form Absen Pulang -->
                <form action="{{ url('/employee/absen-pulang') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-absen">
                        <i class="fas fa-sign-out-alt me-2"></i>Absen Pulang
                    </button>
                </form>
            </div>

        </div>
        <div class="col-lg-7">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Riwayat Absensi Bulan Ini</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Jam Masuk</th>
                                    <th>Jam Pulang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($riwayat as $item)
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($item['tanggal'])->translatedFormat('d F Y') }}</td>
                                        <td><span
                                                class="badge bg-primary-subtle text-primary-emphasis rounded-pill">{{ $item['status'] }}</span>
                                        </td>
                                        <td>{{ $item['jam_masuk'] }}
                                        </td>
                                        <td>{{ $item['jam_keluar'] }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Real-time Clock
        const timeElement = document.getElementById('clock-time');
        const dateElement = document.getElementById('clock-date');

        function updateClock() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('id-ID', {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false
            });
            const dateString = now.toLocaleDateString('id-ID', {
                weekday: 'long',
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });

            if (timeElement) timeElement.textContent = timeString;
            if (dateElement) dateElement.textContent = dateString;
        }

        setInterval(updateClock, 1000);
        updateClock();

        // Absen Button Logic
        const btnMasuk = document.getElementById('btn-absen-masuk');
        const btnPulang = document.getElementById('btn-absen-pulang');

        if (btnMasuk && btnPulang) {
            btnMasuk.addEventListener('click', () => {
                alert('Anda berhasil absen masuk!');
                btnMasuk.disabled = true;
                btnPulang.disabled = false;
            });
            btnPulang.addEventListener('click', () => {
                alert('Anda berhasil absen pulang!');
                btnPulang.disabled = true;
            });
        }
    </script>
@endpush
