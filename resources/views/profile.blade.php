<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Siswa - SuraSunda</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f8f7f3;
            color: #252525;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button,
        input {
            font-family: inherit;
        }

        .app {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            min-height: 100vh;
            background: #fffdf9;
            border-right: 1px solid #e8e3da;
            display: flex;
            flex-direction: column;
            z-index: 100;
        }

        .brand {
            height: 78px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 22px;
            border-bottom: 1px solid #ece7df;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: #16863f;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: 700;
        }

        .brand-title {
            color: #176c38;
            font-size: 20px;
            font-weight: 700;
        }

        .brand-subtitle {
            margin-top: 3px;
            color: #88847c;
            font-size: 10px;
        }

        .sidebar-user {
            margin: 16px 12px 10px;
            padding: 14px;
            background: #f8f5ef;
            border: 1px solid #e6e0d7;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sidebar-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #dcecdf;
            color: #176c38;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            flex-shrink: 0;
        }

        .sidebar-name {
            font-size: 13px;
            font-weight: 700;
            max-width: 140px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .sidebar-role {
            display: inline-block;
            margin-top: 4px;
            padding: 2px 6px;
            background: #e3f1e5;
            color: #176c38;
            border: 1px solid #cfe4d2;
            border-radius: 5px;
            font-size: 9px;
            font-weight: 600;
        }

        .nav-menu {
            padding: 4px 12px;
        }

        .nav-link {
            min-height: 42px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 14px;
            margin-bottom: 5px;
            border-radius: 9px;
            color: #514f4a;
            font-size: 13px;
            font-weight: 500;
            transition: .2s;
        }

        .nav-link:hover {
            background: #f1f5ef;
            color: #16863f;
        }

        .nav-link.active {
            background: #16863f;
            color: white;
            font-weight: 600;
        }

        .nav-icon {
            width: 20px;
            text-align: center;
        }

        .sidebar-bottom {
            margin-top: auto;
            padding: 14px 12px 18px;
            border-top: 1px solid #eee9e1;
        }

        .logout-button {
            width: 100%;
            min-height: 42px;
            padding: 0 14px;
            background: transparent;
            color: #c83c32;
            border: none;
            border-radius: 9px;
            text-align: left;
            font-size: 13px;
            cursor: pointer;
        }

        .logout-button:hover {
            background: #fff0ee;
        }

        /* MAIN */

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            min-height: 100vh;
        }

        .content {
            max-width: 1080px;
            margin: 0 auto;
            padding: 30px 32px 50px;
        }

        /* HERO */

        .hero {
            margin-bottom: 22px;
            padding: 30px 34px;
            background: #176b37;
            color: white;
            border-radius: 17px;
        }

        .hero-label {
            display: inline-block;
            margin-bottom: 11px;
            padding: 6px 11px;
            background: rgba(0, 0, 0, .15);
            border-radius: 6px;
            font-size: 10px;
            font-weight: 600;
        }

        .hero h1 {
            margin-bottom: 8px;
            font-size: 27px;
            font-weight: 700;
        }

        .hero p {
            max-width: 650px;
            color: #e7f4ea;
            font-size: 12px;
            line-height: 1.7;
        }

        /* ALERT */

        .alert-success {
            background: #e6f4e9;
            color: #176b37;
            border: 1px solid #c6e4cd;
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .alert-error {
            background: #fff0ee;
            color: #b42318;
            border: 1px solid #f3c7c2;
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 12px;
        }

        .alert-error ul {
            margin: 8px 0 0 18px;
        }

        /* PROFILE */

        .profile-card {
            margin-bottom: 20px;
            padding: 26px;
            background: #fffefa;
            border: 1px solid #e4ded4;
            border-radius: 15px;
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .big-avatar {
            width: 82px;
            height: 82px;
            border-radius: 50%;
            background: #dcefe1;
            color: #16863f;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 31px;
            font-weight: 700;
            flex-shrink: 0;
        }

        .student-name {
            margin-bottom: 5px;
            font-size: 22px;
            font-weight: 700;
        }

        .student-email {
            margin-bottom: 9px;
            color: #77736d;
            font-size: 12px;
        }

        .student-badge {
            display: inline-block;
            padding: 5px 9px;
            background: #e5f4e8;
            color: #16863f;
            border-radius: 6px;
            font-size: 9px;
            font-weight: 700;
        }

        /* STATISTIK */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin-bottom: 20px;
        }

        .stat-card {
            padding: 18px;
            background: #fffefa;
            border: 1px solid #e4ded4;
            border-radius: 12px;
        }

        .stat-label {
            margin-bottom: 7px;
            color: #8b877f;
            font-size: 9px;
            text-transform: uppercase;
        }

        .stat-value {
            color: #16863f;
            font-size: 20px;
            font-weight: 700;
        }

        .stat-note {
            margin-top: 5px;
            color: #98938b;
            font-size: 9px;
        }

        /* PANEL */

        .detail-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .panel {
            padding: 22px;
            background: #fffefa;
            border: 1px solid #e4ded4;
            border-radius: 15px;
        }

        .panel-title {
            padding-bottom: 13px;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee9e1;
            font-size: 14px;
            font-weight: 700;
        }

        .info-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 13px 0;
            border-bottom: 1px solid #f0ece5;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            color: #88837c;
            font-size: 11px;
        }

        .info-value {
            font-size: 11px;
            font-weight: 600;
            text-align: right;
        }

        .status-active {
            color: #16863f;
        }

        /* PROGRESS */

        .progress-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 11px;
            font-weight: 600;
        }

        .progress-percent {
            color: #16863f;
            font-weight: 700;
        }

        .progress-track {
            width: 100%;
            height: 10px;
            background: #ebe7df;
            border-radius: 20px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: #16863f;
            border-radius: 20px;
        }

        .progress-note {
            margin-top: 13px;
            color: #88837c;
            font-size: 10px;
            line-height: 1.7;
        }

        .btn-main {
            display: block;
            width: 100%;
            margin-top: 18px;
            padding: 11px;
            background: #16863f;
            color: white;
            border: none;
            border-radius: 8px;
            text-align: center;
            font-size: 11px;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-main:hover {
            background: #126e34;
        }

        /* EDIT PROFILE */

        .edit-panel {
            padding: 25px;
            background: #fffefa;
            border: 1px solid #e4ded4;
            border-radius: 15px;
        }

        .edit-header {
            margin-bottom: 22px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee9e1;
        }

        .edit-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .edit-description {
            color: #88837c;
            font-size: 10px;
            line-height: 1.6;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .form-label {
            display: block;
            margin-bottom: 7px;
            color: #45413c;
            font-size: 11px;
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            height: 44px;
            padding: 0 13px;
            background: white;
            border: 1px solid #ddd7cd;
            border-radius: 8px;
            color: #252525;
            font-size: 12px;
            outline: none;
            transition: .2s;
        }

        .form-control:focus {
            border-color: #16863f;
            box-shadow: 0 0 0 3px rgba(22, 134, 63, .08);
        }

        .form-help {
            margin-top: 6px;
            color: #99948c;
            font-size: 9px;
            line-height: 1.5;
        }

        .password-divider {
            grid-column: 1 / -1;
            margin: 3px 0 4px;
            padding-top: 17px;
            border-top: 1px solid #eee9e1;
        }

        .password-title {
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .password-note {
            color: #918c84;
            font-size: 9px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 4px;
        }

        .save-button {
            border: none;
            background: #16863f;
            color: white;
            border-radius: 8px;
            padding: 12px 22px;
            font-size: 11px;
            font-weight: 600;
            cursor: pointer;
        }

        .save-button:hover {
            background: #126e34;
        }

        @media (max-width: 900px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .detail-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }

            .main {
                margin-left: 0;
                width: 100%;
            }

            .content {
                padding: 20px 15px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full,
            .password-divider {
                grid-column: auto;
            }
        }

        @media (max-width: 500px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .profile-card {
                flex-direction: column;
                text-align: center;
            }

            .form-actions {
                display: block;
            }

            .save-button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="app">

    <aside class="sidebar">

        <a href="{{ route('dashboard') }}" class="brand">
            <div class="brand-icon">▣</div>

            <div>
                <div class="brand-title">SuraSunda</div>
                <div class="brand-subtitle">E-Learning Basa Sunda</div>
            </div>
        </a>


        <div class="sidebar-user">

            <div class="sidebar-avatar">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>

            <div>
                <div class="sidebar-name">
                    {{ auth()->user()->name }}
                </div>

                <span class="sidebar-role">
                    Siswa SuraSunda
                </span>
            </div>

        </div>


        <nav class="nav-menu">

            <a href="{{ route('dashboard') }}" class="nav-link">
                <span class="nav-icon">▦</span>
                Dashboard
            </a>

            <a href="{{ route('materi.index') }}" class="nav-link">
                <span class="nav-icon">▥</span>
                Jalur Belajar
            </a>

            <a href="{{ route('latihan') }}" class="nav-link">
                <span class="nav-icon">?</span>
                Kuis & Latihan
            </a>

            <a href="{{ route('riwayat') }}" class="nav-link">
                <span class="nav-icon">▤</span>
                Riwayat Nilai
            </a>

            <a href="{{ route('peringkat') }}" class="nav-link">
                <span class="nav-icon">♜</span>
                Peringkat
            </a>

            <a href="{{ route('prestasi') }}" class="nav-link">
                <span class="nav-icon">♙</span>
                Prestasi
            </a>

            <a href="{{ route('profil') }}" class="nav-link active">
                <span class="nav-icon">♧</span>
                Profil Siswa
            </a>

        </nav>


        <div class="sidebar-bottom">

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="logout-button">
                    ↪ &nbsp; Keluar / Logout
                </button>
            </form>

        </div>

    </aside>


    <main class="main">

        <div class="content">

            <section class="hero">

                <div class="hero-label">
                    ♧ Profil Siswa
                </div>

                <h1>
                    Profil Belajarmu
                </h1>

                <p>
                    Kelola informasi akun dan lihat perkembangan
                    belajarmu selama menggunakan SuraSunda.
                </p>

            </section>


            {{-- NOTIFIKASI BERHASIL --}}

            @if (session('success'))

                <div class="alert-success">
                    ✓ {{ session('success') }}
                </div>

            @endif


            {{-- ERROR VALIDASI --}}

            @if ($errors->any())

                <div class="alert-error">

                    <strong>
                        Data belum berhasil disimpan.
                    </strong>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>

            @endif


            {{-- PROFILE CARD --}}

            <section class="profile-card">

                <div class="big-avatar">
                    {{ strtoupper(substr($user->name, 0, 1)) }}
                </div>

                <div>

                    <div class="student-name">
                        {{ $user->name }}
                    </div>

                    <div class="student-email">
                        {{ $user->email }}
                    </div>

                    <span class="student-badge">
                        SISWA SURASUNDA
                    </span>

                </div>

            </section>


            {{-- STATISTIK --}}

            <section class="stats-grid">

                <div class="stat-card">

                    <div class="stat-label">
                        Materi Selesai
                    </div>

                    <div class="stat-value">
                        {{ $materiSelesai }}/{{ $totalMateri }}
                    </div>

                    <div class="stat-note">
                        Progress materi
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-label">
                        Total Latihan
                    </div>

                    <div class="stat-value">
                        {{ $totalLatihan }}
                    </div>

                    <div class="stat-note">
                        Latihan dikerjakan
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-label">
                        Nilai Tertinggi
                    </div>

                    <div class="stat-value">
                        {{ $nilaiTertinggi }}/100
                    </div>

                    <div class="stat-note">
                        Nilai terbaik
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-label">
                        Rata-rata Nilai
                    </div>

                    <div class="stat-value">
                        {{ $rataRata }}/100
                    </div>

                    <div class="stat-note">
                        Dari seluruh latihan
                    </div>

                </div>

            </section>


            {{-- INFORMASI + PROGRESS --}}

            <div class="detail-grid">

                <section class="panel">

                    <div class="panel-title">
                        Informasi Akun
                    </div>


                    <div class="info-row">
                        <span class="info-label">Nama</span>

                        <span class="info-value">
                            {{ $user->name }}
                        </span>
                    </div>


                    <div class="info-row">
                        <span class="info-label">Email</span>

                        <span class="info-value">
                            {{ $user->email }}
                        </span>
                    </div>


                    <div class="info-row">
                        <span class="info-label">Status</span>

                        <span class="info-value status-active">
                            Siswa Aktif
                        </span>
                    </div>


                    <div class="info-row">
                        <span class="info-label">Bergabung</span>

                        <span class="info-value">

                            {{ $user->created_at
                                ? $user->created_at->format('d M Y')
                                : '-' }}

                        </span>
                    </div>


                    <div class="info-row">
                        <span class="info-label">Latihan Lulus</span>

                        <span class="info-value">
                            {{ $totalLulus }} dari {{ $totalLatihan }}
                        </span>
                    </div>

                </section>


                <section class="panel">

                    <div class="panel-title">
                        Progress Belajar
                    </div>


                    <div class="progress-head">

                        <span>
                            Materi Selesai
                        </span>

                        <span class="progress-percent">
                            {{ $persentaseMateri }}%
                        </span>

                    </div>


                    <div class="progress-track">

                        <div
                            class="progress-fill"
                            style="width: {{ min($persentaseMateri, 100) }}%;"
                        ></div>

                    </div>


                    <div class="progress-note">

                        Kamu telah menyelesaikan

                        <strong>
                            {{ $materiSelesai }}
                        </strong>

                        dari

                        <strong>
                            {{ $totalMateri }}
                        </strong>

                        materi yang tersedia.

                        @if ($persentaseMateri >= 100)

                            Semua materi sudah berhasil diselesaikan.

                        @else

                            Teruskan belajar untuk menyelesaikan
                            seluruh materi Basa Sunda.

                        @endif

                    </div>


                    <a
                        href="{{ route('materi.index') }}"
                        class="btn-main"
                    >
                        Lanjutkan Belajar →
                    </a>

                </section>

            </div>


            {{-- EDIT PROFIL --}}

            <section class="edit-panel">

                <div class="edit-header">

                    <div class="edit-title">
                        Edit Profil
                    </div>

                    <div class="edit-description">
                        Kamu bisa mengubah nama, email, dan password akun di sini.
                        Kosongkan bagian password jika tidak ingin menggantinya.
                    </div>

                </div>


                <form
                    action="{{ route('profil.update') }}"
                    method="POST"
                >

                    @csrf
                    @method('PUT')


                    <div class="form-grid">

                        {{-- NAMA --}}

                        <div class="form-group">

                            <label
                                for="name"
                                class="form-label"
                            >
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="form-control"
                                value="{{ old('name', $user->name) }}"
                                required
                            >

                        </div>


                        {{-- EMAIL --}}

                        <div class="form-group">

                            <label
                                for="email"
                                class="form-label"
                            >
                                Email
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control"
                                value="{{ old('email', $user->email) }}"
                                required
                            >

                        </div>


                        <div class="password-divider">

                            <div class="password-title">
                                Ganti Password
                            </div>

                            <div class="password-note">
                                Bagian ini opsional. Kosongkan jika
                                password tidak ingin diganti.
                            </div>

                        </div>


                        {{-- PASSWORD --}}

                        <div class="form-group">

                            <label
                                for="password"
                                class="form-label"
                            >
                                Password Baru
                            </label>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-control"
                                autocomplete="new-password"
                            >

                            <div class="form-help">
                                Minimal 8 karakter.
                            </div>

                        </div>


                        {{-- KONFIRMASI PASSWORD --}}

                        <div class="form-group">

                            <label
                                for="password_confirmation"
                                class="form-label"
                            >
                                Konfirmasi Password
                            </label>

                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                class="form-control"
                                autocomplete="new-password"
                            >

                            <div class="form-help">
                                Masukkan kembali password baru.
                            </div>

                        </div>

                    </div>


                    <div class="form-actions">

                        <button
                            type="submit"
                            class="save-button"
                        >
                            Simpan Perubahan
                        </button>

                    </div>

                </form>

            </section>

        </div>

    </main>

</div>

</body>
</html>