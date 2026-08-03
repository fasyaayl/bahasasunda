<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kuis & Latihan - SuraSunda</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #faf9f6;
            color: #242424;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            font-family: inherit;
        }

        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            width: 250px;
            background: #fff;
            border-right: 1px solid #e7e2da;
            display: flex;
            flex-direction: column;
            z-index: 100;
        }

        .brand {
            height: 78px;
            padding: 0 20px;
            border-bottom: 1px solid #eee8df;
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: #178844;
            color: #fff;
            display: grid;
            place-items: center;
            font-weight: 700;
            font-size: 18px;
            flex-shrink: 0;
        }

        .brand-name {
            font-size: 20px;
            color: #16763d;
            font-weight: 700;
            line-height: 1.1;
        }

        .brand-sub {
            font-size: 10px;
            color: #888;
            margin-top: 4px;
        }

        /* PROFILE SIDEBAR */

        .profile-box {
            margin: 16px 12px 6px;
            padding: 13px;
            background: #f8f5ef;
            border: 1px solid #e6e0d7;
            border-radius: 11px;
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #dcecdf;
            color: #176c38;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            flex-shrink: 0;
        }

        .profile-name {
            font-size: 12px;
            font-weight: 700;
            max-width: 145px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .profile-role {
            display: inline-block;
            margin-top: 3px;
            padding: 2px 6px;
            border-radius: 5px;
            background: #e3f1e5;
            color: #176c38;
            font-size: 9px;
            font-weight: 600;
        }

        /* NAVIGATION */

        .nav {
            padding: 12px;
        }

        .nav a {
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

        .nav a:hover {
            background: #f1f5ef;
            color: #16863f;
        }

        .nav a.active {
            background: #178844;
            color: #fff;
            font-weight: 600;
        }

        .nav-icon {
            width: 20px;
            text-align: center;
            font-size: 16px;
        }

        .side-bottom {
            margin-top: auto;
            padding: 14px 12px 18px;
            border-top: 1px solid #eee8df;
        }

        .logout {
            width: 100%;
            border: 0;
            background: transparent;
            color: #c53d32;
            cursor: pointer;
            font-size: 13px;
            min-height: 42px;
            border-radius: 9px;
            padding: 0 14px;
            text-align: left;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logout:hover {
            background: #fff0ee;
        }

        /* =========================
           MAIN
        ========================= */

        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        .topbar {
            height: 58px;
            background: #fff;
            border-bottom: 1px solid #e7e2da;
            display: flex;
            align-items: center;
            padding: 0 30px;
        }

        .topbar-title {
            font-size: 13px;
            font-weight: 600;
            color: #555;
        }

        .content {
            max-width: 1120px;
            margin: 0 auto;
            padding: 38px 32px 55px;
        }

        /* =========================
           HEADER
        ========================= */

        .page-header {
            margin-bottom: 30px;
        }

        .page-label {
            color: #16863f;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .page-header h1 {
            font-size: 28px;
            margin-bottom: 9px;
        }

        .page-header p {
            font-size: 13px;
            color: #77736d;
            line-height: 1.6;
        }

        /* =========================
           ALERT
        ========================= */

        .alert-success {
            padding: 15px 18px;
            background: #eaf7ef;
            border: 1px solid #bfe2c9;
            color: #176c38;
            border-radius: 11px;
            margin-bottom: 24px;
            font-size: 12px;
            line-height: 1.6;
        }

        /* =========================
           CARDS
        ========================= */

        .difficulty-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .difficulty-card {
            background: #fff;
            border: 1px solid #e1dcd3;
            border-radius: 15px;
            padding: 23px;
            min-height: 405px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 2px 7px rgba(0,0,0,.025);
            transition: .2s;
        }

        .difficulty-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,.07);
        }

        .card-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .level {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .easy {
            color: #16863f;
        }

        .medium {
            color: #c98500;
        }

        .hard {
            color: #d43b3b;
        }

        .status {
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 9px;
            font-weight: 700;
        }

        .status-easy {
            background: #e6f4e9;
            color: #16863f;
        }

        .status-medium {
            background: #fff1c8;
            color: #a36b00;
        }

        .status-hard {
            background: #fde9e7;
            color: #c83c32;
        }

        .difficulty-title {
            margin-top: 17px;
            font-size: 20px;
            font-weight: 700;
        }

        .difficulty-description {
            margin-top: 8px;
            color: #77736d;
            font-size: 11px;
            line-height: 1.6;
            min-height: 54px;
        }

        /* MATERIAL PROGRESS */

        .material-info {
            background: #f8f7f3;
            border: 1px solid #ebe6de;
            border-radius: 10px;
            padding: 13px;
            margin-top: 16px;
        }

        .material-top {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            font-size: 10px;
            margin-bottom: 9px;
        }

        .material-label {
            color: #88837c;
        }

        .material-value {
            font-weight: 700;
        }

        .progress {
            height: 7px;
            background: #e9e5de;
            border-radius: 20px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            border-radius: 20px;
        }

        .progress-easy {
            background: #16863f;
        }

        .progress-medium {
            background: #e3a008;
        }

        .progress-hard {
            background: #dc3545;
        }

        .progress-text {
            display: block;
            margin-top: 8px;
            font-size: 9px;
            color: #88837c;
        }

        /* SCORE */

        .best-score {
            border: 1px solid #ebe6de;
            border-radius: 10px;
            padding: 12px 13px;
            margin-top: 12px;
            background: #fff;
        }

        .score-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .score-label {
            font-size: 10px;
            color: #88837c;
        }

        .score-number {
            font-size: 19px;
            font-weight: 700;
        }

        .score-green {
            color: #16863f;
        }

        .score-description {
            display: block;
            font-size: 9px;
            color: #88837c;
            margin-top: 4px;
            line-height: 1.4;
        }

        .score-description.pass {
            color: #16863f;
        }

        /* BUTTON */

        .btn-level {
            width: 100%;
            border: 0;
            border-radius: 9px;
            padding: 11px 12px;
            font-size: 11px;
            font-weight: 700;
            text-align: center;
            margin-top: auto;
            transition: .2s;
        }

        .btn-easy {
            background: #16863f;
            color: #fff;
        }

        .btn-easy:hover {
            background: #126e34;
        }

        .btn-medium {
            background: #e5a20a;
            color: #fff;
        }

        .btn-medium:hover {
            background: #c88a00;
        }

        .btn-hard {
            background: #dc3545;
            color: #fff;
        }

        .btn-hard:hover {
            background: #bd2635;
        }

        /* MOBILE */

        .mobile-header {
            display: none;
        }

        @media (max-width: 1000px) {
            .difficulty-grid {
                grid-template-columns: 1fr;
            }

            .difficulty-card {
                min-height: auto;
            }

            .btn-level {
                margin-top: 20px;
            }
        }

        @media (max-width: 760px) {
            .sidebar {
                display: none;
            }

            .main {
                margin-left: 0;
            }

            .topbar {
                display: none;
            }

            .mobile-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 15px 18px;
                background: #fff;
                border-bottom: 1px solid #e7e2da;
            }

            .mobile-logo {
                color: #16863f;
                font-weight: 700;
            }

            .mobile-dashboard {
                font-size: 12px;
                color: #16863f;
                font-weight: 600;
            }

            .content {
                padding: 26px 16px 40px;
            }

            .page-header h1 {
                font-size: 23px;
            }
        }
    </style>
</head>

<body>

<aside class="sidebar">

    <a href="{{ route('dashboard') }}" class="brand">

        <div class="brand-icon">
            ▣
        </div>

        <div>
            <div class="brand-name">
                SuraSunda
            </div>

            <div class="brand-sub">
                E-Learning Basa Sunda
            </div>
        </div>

    </a>


    @auth

        <a href="{{ route('profil') }}" class="profile-box">

            <div class="avatar">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>

            <div>

                <div class="profile-name">
                    {{ auth()->user()->name }}
                </div>

                <span class="profile-role">
                    Siswa SuraSunda
                </span>

            </div>

        </a>

    @endauth


    <nav class="nav">

        <a href="{{ route('dashboard') }}">
            <span class="nav-icon">▦</span>
            Dashboard
        </a>

        <a href="{{ route('materi.index') }}">
            <span class="nav-icon">▥</span>
            Jalur Belajar
        </a>

        <a href="{{ route('latihan') }}" class="active">
            <span class="nav-icon">?</span>
            Kuis & Latihan
        </a>

        <a href="{{ route('riwayat') }}">
            <span class="nav-icon">▤</span>
            Riwayat Nilai
        </a>

        <a href="{{ route('peringkat') }}">
            <span class="nav-icon">♜</span>
            Peringkat
        </a>

        <a href="{{ route('prestasi') }}">
            <span class="nav-icon">♙</span>
            Prestasi
        </a>

        <a href="{{ route('profil') }}">
            <span class="nav-icon">♧</span>
            Profil Siswa
        </a>

    </nav>


    @auth

        <div class="side-bottom">

            <form
                action="{{ route('logout') }}"
                method="POST"
            >
                @csrf

                <button
                    type="submit"
                    class="logout"
                >
                    <span>↪</span>
                    Keluar / Logout
                </button>

            </form>

        </div>

    @endauth

</aside>


<main class="main">

    <div class="topbar">

        <div class="topbar-title">
            Kuis & Latihan
        </div>

    </div>


    <div class="mobile-header">

        <a
            href="{{ route('dashboard') }}"
            class="mobile-logo"
        >
            SuraSunda
        </a>

        <a
            href="{{ route('dashboard') }}"
            class="mobile-dashboard"
        >
            Dashboard
        </a>

    </div>


    <div class="content">

        @if (session('success'))

            <div class="alert-success">

                <strong>
                    ✓ Berhasil.
                </strong>

                <div>
                    {{ session('success') }}
                </div>

            </div>

        @endif


        <section class="page-header">

            <div class="page-label">
                Latihan Bahasa Sunda
            </div>

            <h1>
                Pilih Tingkat Kesulitan
            </h1>

            <p>
                Pilih tingkat kesulitan yang kamu inginkan.
                Easy, Medium, dan Hard bebas diakses kapan saja.
            </p>

        </section>


        @php

            $progressPemula = $totalPemula > 0
                ? round(($selesaiPemula / $totalPemula) * 100)
                : 0;

            $progressMenengah = $totalMenengah > 0
                ? round(($selesaiMenengah / $totalMenengah) * 100)
                : 0;

            $progressLanjutan = $totalLanjutan > 0
                ? round(($selesaiLanjutan / $totalLanjutan) * 100)
                : 0;

        @endphp


        <section class="difficulty-grid">

            {{-- =========================
                 EASY
            ========================== --}}

            <div class="difficulty-card">

                <div class="card-top">

                    <span class="level easy">
                        Easy
                    </span>

                    <span class="status status-easy">
                        {{ $easyPassed ? '✓ Lulus' : '✓ Terbuka' }}
                    </span>

                </div>


                <div class="difficulty-title">
                    Mudah
                </div>

                <div class="difficulty-description">
                    Cocok untuk mulai belajar kosakata dasar
                    Bahasa Sunda.
                </div>


                <div class="material-info">

                    <div class="material-top">

                        <span class="material-label">
                            Materi Pemula
                        </span>

                        <span class="material-value">
                            {{ $selesaiPemula }}/{{ $totalPemula }}
                        </span>

                    </div>

                    <div class="progress">

                        <div
                            class="progress-bar progress-easy"
                            style="width: {{ $progressPemula }}%;"
                        ></div>

                    </div>

                    <span class="progress-text">
                        {{ $progressPemula }}% materi selesai
                    </span>

                </div>


                <div class="best-score">

                    <div class="score-top">

                        <span class="score-label">
                            Nilai Terbaik
                        </span>

                        <span class="score-number {{ $easyPassed ? 'score-green' : '' }}">
                            {{ $bestEasy }}
                        </span>

                    </div>


                    @if ($bestEasy > 0)

                        <span class="score-description {{ $easyPassed ? 'pass' : '' }}">

                            {{ $easyPassed
                                ? '✓ Sudah mencapai nilai kelulusan'
                                : 'Nilai terbaik latihan Easy' }}

                        </span>

                    @else

                        <span class="score-description">
                            Belum pernah mengerjakan
                        </span>

                    @endif

                </div>


                <a
                    href="{{ route('quiz.show', 'easy') }}"
                    class="btn-level btn-easy"
                >
                    {{ $easyPassed
                        ? 'Latihan Easy Lagi'
                        : 'Mulai Latihan Easy' }}
                </a>

            </div>


            {{-- =========================
                 MEDIUM
            ========================== --}}

            <div class="difficulty-card">

                <div class="card-top">

                    <span class="level medium">
                        Medium
                    </span>

                    <span class="status status-medium">
                        {{ $mediumPassed ? '✓ Lulus' : '✓ Terbuka' }}
                    </span>

                </div>


                <div class="difficulty-title">
                    Menengah
                </div>

                <div class="difficulty-description">
                    Latihan kalimat dan pemahaman Bahasa Sunda
                    tingkat menengah.
                </div>


                <div class="material-info">

                    <div class="material-top">

                        <span class="material-label">
                            Materi Menengah
                        </span>

                        <span class="material-value">
                            {{ $selesaiMenengah }}/{{ $totalMenengah }}
                        </span>

                    </div>

                    <div class="progress">

                        <div
                            class="progress-bar progress-medium"
                            style="width: {{ $progressMenengah }}%;"
                        ></div>

                    </div>

                    <span class="progress-text">
                        {{ $progressMenengah }}% materi selesai
                    </span>

                </div>


                <div class="best-score">

                    <div class="score-top">

                        <span class="score-label">
                            Nilai Terbaik
                        </span>

                        <span class="score-number {{ $mediumPassed ? 'score-green' : '' }}">
                            {{ $bestMedium }}
                        </span>

                    </div>


                    @if ($bestMedium > 0)

                        <span class="score-description {{ $mediumPassed ? 'pass' : '' }}">

                            {{ $mediumPassed
                                ? '✓ Sudah mencapai nilai kelulusan'
                                : 'Nilai terbaik latihan Medium' }}

                        </span>

                    @else

                        <span class="score-description">
                            Belum pernah mengerjakan
                        </span>

                    @endif

                </div>


                <a
                    href="{{ route('quiz.show', 'medium') }}"
                    class="btn-level btn-medium"
                >
                    {{ $mediumPassed
                        ? 'Latihan Medium Lagi'
                        : 'Mulai Latihan Medium' }}
                </a>

            </div>


            {{-- =========================
                 HARD
            ========================== --}}

            <div class="difficulty-card">

                <div class="card-top">

                    <span class="level hard">
                        Hard
                    </span>

                    <span class="status status-hard">
                        {{ $hardPassed ? '✓ Lulus' : '✓ Terbuka' }}
                    </span>

                </div>


                <div class="difficulty-title">
                    Sulit
                </div>

                <div class="difficulty-description">
                    Tantang kemampuanmu dengan Bahasa Sunda
                    yang lebih mendalam.
                </div>


                <div class="material-info">

                    <div class="material-top">

                        <span class="material-label">
                            Materi Lanjutan
                        </span>

                        <span class="material-value">
                            {{ $selesaiLanjutan }}/{{ $totalLanjutan }}
                        </span>

                    </div>

                    <div class="progress">

                        <div
                            class="progress-bar progress-hard"
                            style="width: {{ $progressLanjutan }}%;"
                        ></div>

                    </div>

                    <span class="progress-text">
                        {{ $progressLanjutan }}% materi selesai
                    </span>

                </div>


                <div class="best-score">

                    <div class="score-top">

                        <span class="score-label">
                            Nilai Terbaik
                        </span>

                        <span class="score-number {{ $hardPassed ? 'score-green' : '' }}">
                            {{ $bestHard }}
                        </span>

                    </div>


                    @if ($bestHard > 0)

                        <span class="score-description {{ $hardPassed ? 'pass' : '' }}">

                            {{ $hardPassed
                                ? '✓ Sudah mencapai nilai kelulusan'
                                : 'Nilai terbaik latihan Hard' }}

                        </span>

                    @else

                        <span class="score-description">
                            Belum pernah mengerjakan
                        </span>

                    @endif

                </div>


                <a
                    href="{{ route('quiz.show', 'hard') }}"
                    class="btn-level btn-hard"
                >
                    {{ $hardPassed
                        ? 'Latihan Hard Lagi'
                        : 'Mulai Latihan Hard' }}
                </a>

            </div>

        </section>

    </div>

</main>

</body>
</html>