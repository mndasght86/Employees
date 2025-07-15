<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ManKar.Id</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS for Login Page -->
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

        .login-card {
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

        .login-card-title {
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

        .btn-login {
            font-weight: 600;
            padding: 0.85rem;
            border-radius: 0.5rem;
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background-color: #2563EB;
            /* primary-dark */
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
        }

        .forgot-password-link {
            font-size: 0.85rem;
        }

        .forgot-password-link a,
        .register-link a {
            color: var(--bs-primary);
            text-decoration: none;
            font-weight: 600;
        }

        .forgot-password-link a:hover,
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 col-xl-4">
                <div class="card login-card">
                    <div class="card-header">
                        <a class="brand-logo" href="/">ManKar.Id</a>
                        <h2 class="login-card-title mt-3">Selamat Datang Kembali</h2>
                        <p class="text-muted small">Silakan masuk untuk melanjutkan.</p>
                    </div>
                    <div class="card-body">
                        <!-- Login Form -->
                        <form action="{{ route('login.submit') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope fa-fw"></i></span>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="contoh@email.com" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock fa-fw"></i></span>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Masukkan password" required>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label small" for="remember">
                                        Ingat Saya
                                    </label>
                                </div>
                                <div class="forgot-password-link">
                                    <a href="#">Lupa Password?</a>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-login">Masuk</button>
                            </div>
                        </form>

                        <p class="text-center mt-4 small register-link">
                            Belum punya akun? <a href="{{ url('/register') }}">Daftar di sini</a>
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
