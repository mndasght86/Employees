<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dasbor Karyawan') - ManKar.Id</title>

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
            --dark: #1E293B;
            --secondary: #64748B;
            --light: #F8FAFC;
            /* slate-50 */
            --success: #10B981;
            --warning: #F59E0B;
            --danger: #EF4444;
            --font-family-sans-serif: 'Inter', sans-serif;
        }

        body {
            font-family: var(--font-family-sans-serif);
            background-color: var(--light);
        }

        .wrapper {
            display: flex;
            width: 100%;
            min-height: 100vh;
        }

        /* --- Sidebar --- */
        #sidebar {
            width: 260px;
            min-width: 260px;
            background: #fff;
            transition: all 0.3s;
            border-right: 1px solid #e5e7eb;
        }

        #sidebar.collapsed {
            margin-left: -260px;
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
            color: #475569;
            font-weight: 500;
            transition: all 0.2s ease;
            border-radius: 0.5rem;
            margin: 0.25rem 0.75rem;
        }

        #sidebar .nav-item .nav-link:hover {
            background: #F1F5F9;
            color: var(--dark);
        }

        #sidebar .nav-item .nav-link.active {
            background: #DBEAFE;
            /* blue-100 */
            color: var(--primary);
            font-weight: 600;
        }

        #sidebar .nav-item .nav-link i {
            margin-right: 1rem;
            width: 20px;
            text-align: center;
            font-size: 1.1rem;
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

        .card {
            border: 1px solid #e5e7eb;
            border-radius: 0.75rem;
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
        }

        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #e5e7eb;
            padding: 1rem 1.5rem;
        }

        .card-title {
            font-weight: 600;
        }

        /* --- Dashboard Cards --- */
        .info-card {
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }

        .info-card .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 0.75rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1.5rem;
        }

        /* --- Absensi Page --- */
        .clock-container {
            background: linear-gradient(135deg, var(--dark), #374151);
            color: #fff;
            padding: 2rem;
            border-radius: 1rem;
            text-align: center;
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }

        .clock-time {
            font-size: 3.5rem;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .clock-date {
            font-size: 1.2rem;
            opacity: 0.8;
        }

        .btn-absen {
            padding: 1rem;
            font-size: 1.2rem;
            font-weight: 600;
        }

        /* --- Profile Page --- */
        .profile-banner {
            height: 150px;
            background-image: linear-gradient(to right, #e0e7ff, #c7d2fe);
            border-radius: 0.75rem 0.75rem 0 0;
        }

        .profile-picture {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-top: -60px;
            border: 4px solid #fff;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }

        @media (max-width: 768px) {
            #sidebar {
                position: absolute;
                z-index: 1000;
                height: 100%;
                margin-left: -260px;
            }

            #sidebar.collapsed {
                margin-left: 0;
            }

            .page-title {
                font-size: 1.5rem;
            }
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
                <a href="{{ route('employee.dashboard') }}" class="brand-logo"><i
                        class="fas fa-cubes me-2"></i>ManKar.Id</a>
            </div>
            <ul class="nav nav-pills flex-column mb-auto mt-3">
                <li class="nav-item">
                    <a href="{{ route('employee.dashboard') }}"
                        class="nav-link {{ request()->routeIs('employee.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-home fa-fw"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('employee.profil') }}"
                        class="nav-link {{ request()->routeIs('employee.profil') ? 'active' : '' }}">
                        <i class="fas fa-user-circle fa-fw"></i>Profil Saya
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('employee.absensi') }}"
                        class="nav-link {{ request()->routeIs('employee.absensi') ? 'active' : '' }}">
                        <i class="fas fa-fingerprint fa-fw"></i>Absensi Harian
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('employee.slipgaji') }}"
                        class="nav-link {{ request()->routeIs('employee.slipgaji') ? 'active' : '' }}">
                        <i class="fas fa-receipt fa-fw"></i>Slip Gaji
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('employee.cuti') }}"
                        class="nav-link {{ request()->routeIs('employee.cuti') ? 'active' : '' }}">
                        <i class="fas fa-calendar-alt fa-fw"></i>Riwayat Cuti
                    </a>
                </li>
            </ul>
            <div class="p-3 mt-auto">
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
                <button class="btn btn-light d-md-none" id="sidebar-toggle"><i class="fas fa-bars"></i></button>
                <div class="d-none d-md-block">
                    <h5 class="fw-bold mb-0">Portal Karyawan</h5>
                </div>
                <div class="d-flex align-items-center">
                    <div class="text-end me-3">
                        <div class="fw-bold">{{ session('nama') }}</div>
                        <small class="text-muted">{{ session('email') }}</small>
                    </div>
                    <img src="https://placehold.co/100x100/3B82F6/FFFFFF?text=BS" alt="Profile"
                        class="rounded-circle profile-pic">
                </div>
            </nav>

            <!-- Page Content -->
            <main id="content">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebar-toggle');

            // Sidebar Toggle for mobile
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
