<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Masuk - SuraSunda</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f7faf7;
        }

        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-card {
            width: 100%;
            max-width: 450px;
            background: white;
            padding: 35px;
            border-radius: 18px;
            border: 1px solid #e8eee8;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
        }

        .logo {
            color: #198754;
            font-weight: 700;
            font-size: 25px;
        }

        .login-card h2 {
            font-weight: 700;
            margin-top: 20px;
        }

        .subtitle {
            color: #6c757d;
            font-size: 14px;
        }

        .form-control {
            padding: 12px;
            border-radius: 10px;
        }

        .btn-login {
            background: #198754;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
        }

        .btn-login:hover {
            background: #157347;
            color: white;
        }

        .register-link {
            color: #198754;
            font-weight: 600;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="login-container">

    <div class="login-card">

        <div class="text-center">
            <div class="logo">SuraSunda</div>

            <h2>Selamat Datang</h2>

            <p class="subtitle">
                Masuk untuk melanjutkan belajar Bahasa Sunda.
            </p>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/login" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Email</label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    required
                >
            </div>

            <div class="mb-4">
                <label class="form-label">Kata Sandi</label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Masukkan kata sandi"
                    required
                >
            </div>

            <button
                type="submit"
                class="btn btn-login w-100"
            >
                Masuk
            </button>

        </form>

        <div class="text-center mt-4">
            <span class="subtitle">
                Belum punya akun?
            </span>

            <a href="/register" class="register-link">
                Daftar
            </a>
        </div>

    </div>

</div>

</body>
</html>