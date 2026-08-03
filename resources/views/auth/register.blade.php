<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar - SuraSunda</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f7faf7;
        }

        .register-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .register-card {
            width: 100%;
            max-width: 450px;
            background: white;
            padding: 35px;
            border-radius: 18px;
            border: 1px solid #e8eee8;
            box-shadow: 0 8px 30px rgba(0,0,0,0.06);
        }

        .logo {
            color: #198754;
            font-weight: 700;
            font-size: 25px;
        }

        .register-card h2 {
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

        .btn-register {
            background: #198754;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
        }

        .btn-register:hover {
            background: #157347;
            color: white;
        }

        .login-link {
            color: #198754;
            font-weight: 600;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="register-container">

    <div class="register-card">

        <div class="text-center">
            <div class="logo">SuraSunda</div>

            <h2>Buat Akun</h2>

            <p class="subtitle">
                Daftar untuk mulai belajar Bahasa Sunda.
            </p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/register" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Nama</label>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    value="{{ old('name') }}"
                    placeholder="Masukkan nama"
                    required
                >
            </div>

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

            <div class="mb-3">
                <label class="form-label">Kata Sandi</label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Minimal 6 karakter"
                    required
                >
            </div>

            <div class="mb-4">
                <label class="form-label">Konfirmasi Kata Sandi</label>

                <input
                    type="password"
                    name="password_confirmation"
                    class="form-control"
                    placeholder="Ulangi kata sandi"
                    required
                >
            </div>

            <button
                type="submit"
                class="btn btn-register w-100"
            >
                Daftar
            </button>

        </form>

        <div class="text-center mt-4">
            <span class="subtitle">
                Sudah punya akun?
            </span>

            <a href="/login" class="login-link">
                Masuk
            </a>
        </div>

    </div>

</div>

</body>
</html>