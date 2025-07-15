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
    <style>
        :root {
            --bs-primary-rgb: 59, 130, 246;
            --bs-primary: #3B82F6;
            --bs-dark-rgb: 30, 41, 59;
            --bs-dark: #1E293B;
            --bs-secondary: #64748B;
            --bs-light: #F1F5F9;
            --bs-font-sans-serif: 'Poppins', sans-serif;
        }

        body {
            background-color: #fff;
            color: var(--bs-dark);
        }

        /* --- Navbar --- */
        .navbar {
            transition: background-color 0.4s ease, box-shadow 0.4s ease;
        }

        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .navbar-brand {
            font-weight: 700;
        }

        .nav-link {
            font-weight: 500;
            color: #475569;
            /* slate-600 */
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--bs-primary) !important;
            font-weight: 600;
        }

        .btn-login {
            font-weight: 600;
            padding: 0.6rem 1.5rem;
        }

        /* --- Hero Section --- */
        #hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(to bottom right, #EFF6FF, #fff, #F1F5F9);
            overflow: hidden;
            padding-top: 80px;
        }

        #hero::before,
        #hero::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            filter: blur(100px);
            z-index: 0;
        }

        #hero::before {
            background-color: rgba(59, 130, 246, 0.15);
            top: -100px;
            left: -100px;
        }

        #hero::after {
            background-color: rgba(168, 85, 247, 0.15);
            /* purple */
            bottom: -100px;
            right: -100px;
        }

        #hero .container {
            position: relative;
            z-index: 1;
        }

        #hero h1 {
            font-weight: 800;
            font-size: 3.5rem;
        }

        .gradient-text {
            background: linear-gradient(90deg, var(--bs-primary), var(--bs-dark));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
        }

        #hero p {
            font-size: 1.15rem;
            color: var(--bs-secondary);
        }

        .btn-hero {
            font-size: 1.1rem;
            font-weight: 700;
            padding: 0.9rem 2rem;
            transition: all 0.3s ease;
        }

        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
        }

        /* --- Sections --- */
        .section-padding {
            padding: 6rem 0;
        }

        .section-title {
            font-weight: 700;
            font-size: 2.5rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--bs-secondary);
        }

        /* --- Features Section --- */
        .feature-card {
            background-color: #F8FAFC;
            /* slate-50 */
            border: 1px solid #E2E8F0;
            /* slate-200 */
            padding: 2.5rem;
            border-radius: 1rem;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            border-color: var(--bs-primary);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem auto;
            background-color: #DBEAFE;
            /* blue-100 */
            color: var(--bs-primary);
            font-size: 2.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .feature-card h3 {
            font-weight: 700;
            font-size: 1.25rem;
        }

        /* --- About & Stats Section --- */
        .stat-box {
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--bs-primary);
        }

        /* --- CTA Section --- */
        #cta {
            background-image: linear-gradient(to right, var(--bs-primary), #60A5FA);
            border-radius: 1rem;
            color: white;
            box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
        }

        #cta h2 {
            font-weight: 800;
        }

        .btn-cta {
            background-color: white;
            color: var(--bs-primary);
            font-weight: 700;
            padding: 0.9rem 2rem;
            transition: all 0.3s ease;
        }

        .btn-cta:hover {
            background-color: var(--bs-light);
            transform: scale(1.05);
        }

        /* --- Footer --- */
        footer {
            background-color: var(--bs-dark);
            color: #94A3B8;
            /* slate-400 */
        }

        footer h5 {
            color: white;
            font-weight: 600;
        }

        footer a {
            color: #94A3B8;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: white;
        }

        .social-icons a {
            font-size: 1.25rem;
        }

        /* --- Responsive --- */
        @media (max-width: 991.98px) {
            #hero h1 {
                font-size: 2.8rem;
            }

            .section-padding {
                padding: 4rem 0;
            }
        }

        @media (max-width: 767.98px) {
            #hero h1 {
                font-size: 2.2rem;
            }

            .section-title {
                font-size: 2rem;
            }
        }
    </style>
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
                    <p class="small mt-3"><strong>Email:</strong> info@ManKar.id<br><strong>Telepon:</strong> +62 21
                        1234
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Inisialisasi AOS (Animate On Scroll)
            AOS.init({
                duration: 800,
                once: true,
                offset: 50
            });

            // 2. Efek 'scrolled' pada Navbar
            const navbar = document.querySelector('.navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // 3. Animasi Counter
            function animateCounters() {
                const counters = document.querySelectorAll('.stat-number');
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    counter.innerText = '0'; // Reset ke 0
                    const updateCount = () => {
                        const count = +counter.innerText;
                        const speed = 200;
                        const inc = Math.ceil(target / speed);

                        if (count < target) {
                            counter.innerText = Math.min(count + inc, target);
                            setTimeout(updateCount, 15);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    updateCount();
                });
            }

            const aboutSection = document.querySelector('#about');
            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting) {
                    animateCounters();
                    observer.disconnect(); // Hentikan observasi setelah animasi berjalan sekali
                }
            }, {
                threshold: 0.4
            });

            if (aboutSection) {
                observer.observe(aboutSection);
            }

            // 4. Update tahun di footer secara dinamis
            document.getElementById('year').textContent = new Date().getFullYear();

            // 5. Smooth scroll & Active link indicator
            const navLinks = document.querySelectorAll('.nav-link');
            const sections = document.querySelectorAll('section');

            // Fungsi untuk smooth scroll
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    if (this.hash !== "") {
                        e.preventDefault();
                        const hash = this.hash;
                        const targetElement = document.querySelector(hash);
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop -
                                70, // offset untuk fixed navbar
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });

            // Fungsi untuk update active link saat scroll
            window.addEventListener('scroll', () => {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (pageYOffset >= sectionTop - 80) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href').includes(current)) {
                        link.classList.add('active');
                    }
                });
            });
        });
    </script>
</body>

</html>
