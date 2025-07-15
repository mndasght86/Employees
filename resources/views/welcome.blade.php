<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ManKar.ID - Solusi Manajemen Karyawan Modern</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Animate On Scroll (AOS) Library for Animations -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <!-- 1. Navigation Bar -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fs-4" href="#">ManKar.id</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link px-3" href="#hero">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#features">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#footer">Kontak</a></li>
                </ul>
                <a href="/login" class="btn btn-primary rounded-pill btn-login d-none d-lg-block">Login</a>
            </div>
        </div>
    </nav>

    <!-- 2. Hero Section -->
    <section id="hero">
        <div class="container text-center">
            <div data-aos="fade-up">
                <h1 class="mb-4">Manajemen HR Revolusioner, <br class="d-none d-md-block"> <span
                        class="gradient-text">Semuanya Jadi Mudah</span></h1>
                <p class="lead mx-auto mb-5" style="max-width: 600px;">
                    Platform terintegrasi untuk mengelola data karyawan, absensi, penggajian, dan penilaian kinerja
                    dalam satu aplikasi yang intuitif dan powerful.
                </p>
                <a href="#features" class="btn btn-primary rounded-pill btn-hero">
                    Mulai Sekarang <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. Features Section -->
    <section id="features" class="section-padding bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Dibangun untuk Efisiensi Maksimal</h2>
                <p class="section-subtitle">Fitur-fitur canggih yang menjawab semua kebutuhan HR Anda.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-users"></i></div>
                        <h3>Database Karyawan</h3>
                        <p class="text-secondary">Kelola semua informasi karyawan, mulai dari data pribadi, kontrak,
                            hingga riwayat pekerjaan secara terpusat dan aman.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-clock"></i></div>
                        <h3>Absensi Real-time</h3>
                        <p class="text-secondary">Sistem absensi online yang akurat dengan rekapitulasi otomatis. Pantau
                            kehadiran karyawan secara real-time dari mana saja.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                        <h3>Payroll Otomatis</h3>
                        <p class="text-secondary">Proses penggajian menjadi lebih cepat dan minim kesalahan dengan
                            perhitungan otomatis komponen gaji, pajak, dan BPJS.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. About Us & Statistics Section -->
    <section id="about" class="section-padding bg-light">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title mb-4">Misi Kami Adalah Memberdayakan Pertumbuhan Bisnis Anda</h2>
                    <p class="text-secondary mb-4">
                        Kami percaya bahwa aset terbesar perusahaan adalah sumber daya manusianya. Oleh karena itu, kami
                        mendedikasikan diri untuk menciptakan alat yang tidak hanya menyederhanakan administrasi HR,
                        tetapi juga membantu Anda membangun tim yang solid dan produktif.
                    </p>
                    <div class="row g-4 text-center">
                        <div class="col-sm-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="stat-box">
                                <span class="stat-number" data-target="150">0</span><span class="stat-number">+</span>
                                <p class="mt-2 text-muted">Karyawan Aktif</p>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="zoom-in" data-aos-delay="350">
                            <div class="stat-box">
                                <span class="stat-number" data-target="99">0</span><span class="stat-number">%</span>
                                <p class="mt-2 text-muted">Kepuasan Klien</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <img src="https://placehold.co/600x600/3B82F6/FFFFFF?text=Solusi+Inovatif"
                        class="img-fluid rounded-4 shadow-lg" alt="Gambar tentang perusahaan">
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Call to Action (CTA) Section -->
    <section class="section-padding bg-white">
        <div class="container">
            <div id="cta" class="p-5 text-center" data-aos="flip-up">
                <h2 class="fs-1 mb-4">Siap Mengubah Cara Anda Mengelola Tim?</h2>
                <p class="lead mx-auto mb-5" style="max-width: 600px;">
                    Coba ManKar.id sekarang dan rasakan kemudahan mengelola HR. Daftar untuk demo gratis atau langsung
                    berlangganan.
                </p>
                <a href="/register" class="btn rounded-pill btn-cta">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- 6. Footer -->
    <footer id="footer" class="pt-5 pb-4">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <h5 class="fs-5">ManKar.id</h5>
                    <p class="small">Gedung Cyber, Lt. 10<br>Jl. Jend. Sudirman Kav. 52-53<br>Jakarta Selatan,
                        Indonesia</p>
                    <p class="small mt-3"><strong>Email:</strong> info@ManKar.id<br><strong>Telepon:</strong> +62 21 1234
                        5678</p>
                </div>
                <div class="col-lg-2 col-6">
                    <h5 class="fs-6">Tautan</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#about">Tentang Kami</a></li>
                        <li class="mb-2"><a href="#features">Fitur</a></li>
                        <li class="mb-2"><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6">
                    <h5 class="fs-6">Layanan</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#">Manajemen Karyawan</a></li>
                        <li class="mb-2"><a href="#">Sistem Absensi</a></li>
                        <li><a href="#">Aplikasi Payroll</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="fs-6">Terhubung Dengan Kami</h5>
                    <div class="social-icons">
                        <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 border-secondary">
            <div class="text-center small text-muted">
                &copy; <span id="year"></span> ManKar.id. Semua Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
