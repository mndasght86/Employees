<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - ManKar.Id</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS for Register Page -->
    <style>
        :root {
            --bs-primary: #3B82F6;
            --bs-dark: #1E293B;
            --bs-secondary: #64748B;
            --bs-light: #F1F5F9;
            --bs-font-sans-serif: 'Poppins', sans-serif;
        }

        body {
            font-family: var(--bs-font-sans-serif);
            background-color: var(--bs-light);
            background-image: linear-gradient(to top, #eef2f7, #fff);
            min-height: 100vh;
            padding: 2rem 0;
            display: flex;
            align-items: center;
        }

        .register-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
            overflow: hidden;
        }

        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #e2e8f0;
            padding: 2rem;
            text-align: center;
        }

        .card-header .brand-logo {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--bs-dark);
            text-decoration: none;
        }

        .card-body {
            padding: 2rem 2.5rem;
        }

        .register-card-title {
            font-weight: 700;
            color: var(--bs-dark);
        }

        .form-label {
            font-weight: 500;
            color: var(--bs-secondary);
            font-size: 0.9rem;
        }

        .input-group-text {
            background-color: transparent;
            border-right: none;
            color: var(--bs-secondary);
        }

        .form-control {
            border-left: none;
            padding: 0.75rem 1rem;
            border-color: #E2E8F0;
        }

        .form-control:focus {
            border-color: var(--bs-primary);
            box-shadow: none;
        }

        .form-control:focus~.input-group-text,
        .form-control:focus+.input-group-text {
            border-color: var(--bs-primary);
            color: var(--bs-primary);
        }

        .form-select {
            padding: 0.75rem 1rem;
        }

        .btn-register {
            font-weight: 600;
            padding: 0.85rem;
            border-radius: 0.5rem;
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
            transition: all 0.3s ease;
        }

        .btn-register:hover {
            background-color: #2563EB;
            /* primary-dark */
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
        }

        .login-link a {
            color: var(--bs-primary);
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <div class="card register-card">
                    <div class="card-header">
                        <a class="brand-logo" href="/">ManKar.Id</a>
                        <h2 class="register-card-title mt-3">Buat Akun Baru</h2>
                        <p class="text-muted small">Selamat datang! Silakan isi data Anda untuk memulai.</p>
                    </div>
                    <div class="card-body">
                        <!-- Registration Form -->
                        <form action="/register" method="POST">
                            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user fa-fw"></i></span>
                                        <input type="text" class="form-control" id="nama" name="name"
                                            placeholder="Nama Anda" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-id-card fa-fw"></i></span>
                                        <input type="text" class="form-control" id="nik" name="nik"
                                            placeholder="16 digit NIK" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope fa-fw"></i></span>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="contoh@email.com" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="telepon" class="form-label">Nomor Telepon</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-phone fa-fw"></i></span>
                                    <input type="tel" class="form-control" id="telepon" name="phone"
                                        placeholder="08xxxxxxxxxx" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-map-marker-alt fa-fw"></i></span>
                                    <input type="text" class="form-control" id="alamat" name="address"
                                        placeholder="Alamat lengkap Anda" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-lock fa-fw"></i></span>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Buat password" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-lock fa-fw"></i></span>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation" placeholder="Ulangi password" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir"
                                        name="date_of_birth" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-select" id="role" name="role" required>
                                        <option selected disabled value="">Pilih role...</option>
                                        <option value="karyawan">Karyawan</option>
                                        <option value="admin">Admin</option>
                                        <option value="manager">Manager</option>
                                    </select>
                                </div>
                            </div>

                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-primary btn-register">Daftar Akun</button>
                            </div>
                        </form>

                        <p class="text-center mt-4 small login-link">
                            Sudah punya akun? <a href="{{ url('/login') }}">Masuk di sini</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
