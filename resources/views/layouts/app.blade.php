<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dasbor HR') - ManKar.Id</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        :root {
            --primary: #3B82F6;
            --primary-dark: #2563EB;
            --dark: #1E293B;
            --secondary: #64748B;
            --light: #F1F5F9;
            --sidebar-bg: #fff;
            --sidebar-link-color: #475569;
            --sidebar-link-hover-bg: #F1F5F9;
            --sidebar-link-active-color: var(--primary);
            --font-family-sans-serif: 'Inter', sans-serif;
        }

        body {
            font-family: var(--font-family-sans-serif);
            background-color: var(--light);
            font-size: 0.95rem;
        }

        .wrapper {
            display: flex;
            width: 100%;
            min-height: 100vh;
        }

        /* --- Sidebar --- */
        #sidebar {
            width: 250px;
            min-width: 250px;
            background: var(--sidebar-bg);
            transition: all 0.3s;
            border-right: 1px solid #e5e7eb;
        }

        #sidebar.collapsed {
            margin-left: -250px;
        }

        .sidebar-header {
            padding: 1.25rem 1.5rem;
            text-align: center;
            border-bottom: 1px solid #e5e7eb;
        }

        .sidebar-header .brand-logo {
            color: var(--dark);
            text-decoration: none;
            font-weight: 700;
            font-size: 1.5rem;
        }

        #sidebar .nav-item .nav-link {
            padding: 0.8rem 1.5rem;
            color: var(--sidebar-link-color);
            font-weight: 500;
            transition: all 0.2s ease;
            border-radius: 0.5rem;
            margin: 0.25rem 0.75rem;
        }

        #sidebar .nav-item .nav-link:hover {
            background: var(--sidebar-link-hover-bg);
            color: var(--dark);
        }

        #sidebar .nav-item .nav-link.active {
            background: #DBEAFE;
            /* blue-100 */
            color: var(--sidebar-link-active-color);
            font-weight: 600;
        }

        #sidebar .nav-item .nav-link i {
            margin-right: 1rem;
            width: 20px;
            text-align: center;
            font-size: 1.1rem;
        }

        .sidebar-footer {
            border-top: 1px solid #e5e7eb;
        }

        /* --- Main Content --- */
        #main-content {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        /* --- Topbar --- */
        .topbar {
            background: #fff;
            padding: 0.75rem 2rem;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.03);
        }

        .topbar .nav-link,
        .topbar .dropdown-item {
            color: var(--secondary);
        }

        .topbar .nav-link:hover {
            color: var(--dark);
        }

        .topbar .dropdown-menu {
            border-radius: 0.75rem;
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            border: 1px solid #e5e7eb;
        }

        .topbar .profile-pic {
            width: 40px;
            height: 40px;
            object-fit: cover;
        }

        /* --- Content Area --- */
        #content {
            padding: 2rem;
            flex-grow: 1;
        }

        .page-header {
            margin-bottom: 2rem;
        }

        .page-title {
            font-weight: 700;
            color: var(--dark);
            font-size: 1.75rem;
        }

        /* --- General Card Style --- */
        .card {
            border: none;
            border-radius: 0.75rem;
            box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.05), 0 1px 2px -1px rgb(0 0 0 / 0.05);
            border: 1px solid #e5e7eb;
        }

        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #e5e7eb;
            padding: 1rem 1.5rem;
        }

        .card-title {
            font-weight: 600;
        }

        /* --- Dashboard Specific --- */
        .stat-card {
            border-radius: 1rem;
            color: #fff;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .stat-card .stat-icon {
            position: absolute;
            right: -20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 5rem;
            opacity: 0.2;
            transition: all 0.5s ease;
        }

        .stat-card:hover .stat-icon {
            transform: translateY(-50%) scale(1.1) rotate(-10deg);
        }

        .stat-card .stat-value {
            font-size: 2.25rem;
            font-weight: 700;
        }

        .stat-card .stat-label {
            font-size: 1rem;
            opacity: 0.9;
        }

        .bg-gradient-primary {
            background-image: linear-gradient(45deg, #3B82F6, #60A5FA);
        }

        .bg-gradient-success {
            background-image: linear-gradient(45deg, #10B981, #34D399);
        }

        .bg-gradient-warning {
            background-image: linear-gradient(45deg, #F59E0B, #FBBF24);
        }

        .bg-gradient-danger {
            background-image: linear-gradient(45deg, #EF4444, #F87171);
        }

        /* --- Table Style --- */
        .table-hover>tbody>tr:hover>* {
            background-color: #F8FAFC;
        }

        .table thead th {
            font-weight: 600;
            background-color: #F8FAFC;
            border-bottom-width: 1px;
        }

        .table .badge {
            font-size: 0.8rem;
            padding: 0.4em 0.7em;
            font-weight: 500;
        }

        .action-buttons .btn {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            border-radius: 0.5rem;
        }

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar.collapsed {
                margin-left: 0;
            }
        }

        /*
 * Style Kustom untuk Tombol Logout
 */
        .logout-button-custom {
            /* Mengatur layout ikon dan teks agar sejajar rapi */
            display: inline-flex;
            align-items: center;
            gap: 8px;
            /* Jarak antara ikon dan teks */

            /* Menghilangkan border default dan memberi sudut melengkung */
            border: none;
            border-radius: 8px;

            /* Memberi efek background gradasi, bukan warna solid */
            background: linear-gradient(145deg, #e53e3e, #c53030);

            /* Memberi efek bayangan agar tombol terlihat 'terangkat' */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);

            /* Kunci utama: animasi transisi yang halus untuk semua efek */
            transition: all 0.3s ease;
        }

        /* EFEK SAAT MOUSE MENYENTUH TOMBOL (HOVER) */
        .logout-button-custom:hover {
            /* Mengangkat tombol sedikit ke atas */
            transform: translateY(-3px);

            /* Membuat bayangan lebih jelas saat di-hover */
            box-shadow: 0 7px 20px rgba(0, 0, 0, 0.25);

            /* Membuat warna gradasi sedikit lebih cerah */
            background: linear-gradient(145deg, #f56565, #e53e3e);
        }

        /* EFEK SAAT TOMBOL DIKLIK (ACTIVE) */
        .logout-button-custom:active {
            /* Mendorong tombol ke bawah, memberi efek 'ditekan' */
            transform: translateY(1px);

            /* Mengurangi bayangan agar terlihat seperti menempel */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .logout-button-custom {
            background: transparent;
            border: 2px solid #e53e3e;
            color: #e53e3e;
            /* ... tambahkan properti lain dari atas ... */
        }

        .logout-button-custom:hover {
            background: #e53e3e;
            color: white;
            /* ... tambahkan properti lain dari atas ... */
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- ===============================================-->
        <!--    Sidebar                                     -->
        <!-- ===============================================-->
        <nav id="sidebar" class="d-flex flex-column flex-shrink-0">
            <div class="sidebar-header">
                <a href="{{ route('hr.dashboard') }}" class="brand-logo"><i class="fas fa-cubes me-2"></i>ManKar.Id</a>
            </div>
            <ul class="nav nav-pills flex-column mb-auto mt-3">
                <li class="nav-item">
                    <a href="{{ route('hr.dashboard') }}"
                        class="nav-link {{ request()->routeIs('hr.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt fa-fw"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('hr.karyawan') }}"
                        class="nav-link {{ request()->routeIs('hr.karyawan') ? 'active' : '' }}">
                        <i class="fas fa-users fa-fw"></i>Data Karyawan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('hr.absensi') }}"
                        class="nav-link {{ request()->routeIs('hr.absensi') ? 'active' : '' }}">
                        <i class="fas fa-calendar-check fa-fw"></i>Absensi
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('hr.penggajian') }}"
                        class="nav-link {{ request()->routeIs('hr.penggajian') ? 'active' : '' }}">
                        <i class="fas fa-file-invoice-dollar fa-fw"></i>Penggajian
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('hr.laporan') }}"
                        class="nav-link {{ request()->routeIs('hr.laporan') ? 'active' : '' }}">
                        <i class="fas fa-chart-pie fa-fw"></i>Laporan
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer p-3">
                <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Yakin ingin logout?')">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Logout</button>
                </form>
            </div>
        </nav>

        <!-- ===============================================-->
        <!--    Main Content Wrapper                          -->
        <!-- ===============================================-->
        <div id="main-content">
            <!-- Topbar -->
            <nav class="topbar d-flex justify-content-between align-items-center">
                <button class="btn btn-light" id="sidebar-toggle"><i class="fas fa-bars"></i></button>
                <div class="d-flex align-items-center">
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-bell fs-5"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Notifikasi 1</a></li>
                                <li><a class="dropdown-item" href="#">Notifikasi 2</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown ms-3">
                            <a class="nav-link d-flex align-items-center" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://placehold.co/100x100/3B82F6/FFFFFF?text=HR" alt="Profile"
                                    class="rounded-circle profile-pic">
                                <div class="ms-2 d-none d-md-block">
                                    <div class="fw-bold">{{ session('nama') }}</div>
                                    <small class="text-muted">{{ session('email') }}</small>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-user-circle me-2"></i>Profil</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-cog me-2"></i>Pengaturan</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger logout-button-custom m-1">
                                            <i class="fas fa-sign-out-alt"></i>
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Page Content -->
            <main id="content">
                @yield('content')
            </main>
        </div>
    </div>

    @yield('modals')

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.getElementById('logout-form').addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda akan keluar dari sesi ini.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Logout!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                // Jika pengguna menekan tombol "Ya, Logout!"
                if (result.isConfirmed) {
                    // Kirim form logout secara manual
                    this.submit();
                }
            })
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebar-toggle');

            if (sidebarToggle) {
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('collapsed');
                });
            }
        });
    </script>
    @stack('scripts')
</body>

</html>
