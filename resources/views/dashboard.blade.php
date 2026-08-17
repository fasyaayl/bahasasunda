<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - SuraSunda</title>

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

        button {
            font-family: inherit;
        }

        .app {
            min-height: 100vh;
            display: flex;
        }


        /* =========================
           SIDEBAR DESKTOP
        ========================= */

        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #fffdf9;
            border-right: 1px solid #e8e3da;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
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
            line-height: 1.1;
        }

        .brand-subtitle {
            font-size: 10px;
            color: #88847c;
            margin-top: 4px;
        }

        .profile-box {
            margin: 16px 12px 10px;
            padding: 14px;
            border: 1px solid #e6e0d7;
            background: #f8f5ef;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #dcecdf;
            color: #176c38;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 17px;
            flex-shrink: 0;
        }

        .profile-name {
            font-weight: 700;
            font-size: 13px;
            max-width: 140px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .profile-role {
            display: inline-block;
            background: #e3f1e5;
            color: #176c38;
            border: 1px solid #cfe4d2;
            border-radius: 5px;
            padding: 2px 6px;
            font-size: 9px;
            font-weight: 600;
            margin-top: 4px;
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
            font-size: 16px;
        }

        .sidebar-bottom {
            margin-top: auto;
            padding: 14px 12px 18px;
            border-top: 1px solid #eee9e1;
        }

        .logout-button {
            width: 100%;
            border: 0;
            background: transparent;
            color: #c83c32;
            min-height: 42px;
            border-radius: 9px;
            text-align: left;
            padding: 0 14px;
            font-size: 13px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logout-button:hover {
            background: #fff0ee;
        }


        /* =========================
           MAIN
        ========================= */

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            min-height: 100vh;
        }

        .content {
            max-width: 1080px;
            margin: 0 auto;
            padding: 28px 32px 50px;
        }


        /* =========================
           MOBILE HEADER
        ========================= */

        .mobile-header {
            display: none;
        }

        .mobile-actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .mobile-menu-button {
            width: 42px;
            height: 42px;
            border: 1px solid #e2ddd5;
            background: white;
            border-radius: 9px;
            color: #176c38;
            font-size: 21px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mobile-menu-button:hover {
            background: #f1f5ef;
        }

        .mobile-menu {
            display: none;
        }

        .mobile-overlay {
            display: none;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            background: #176b37;
            border-radius: 17px;
            padding: 32px 34px;
            color: white;
            margin-bottom: 24px;
            min-height: 185px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .student-pill {
            width: fit-content;
            background: rgba(0,0,0,.15);
            border-radius: 6px;
            padding: 6px 11px;
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 13px;
        }

        .hero h1 {
            font-size: 28px;
            line-height: 1.25;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 13px;
            line-height: 1.7;
            max-width: 650px;
            color: #e8f5eb;
        }


        /* =========================
           STATISTIK
        ========================= */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-bottom: 28px;
        }

        .stat-card {
            background: #fffefa;
            border: 1px solid #e4ded4;
            border-radius: 13px;
            padding: 17px;
            min-height: 82px;
            display: flex;
            align-items: center;
            gap: 13px;
            box-shadow: 0 2px 6px rgba(0,0,0,.02);
        }

        .stat-icon {
            width: 42px;
            height: 42px;
            border-radius: 9px;
            background: #e5f4e8;
            color: #16863f;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
            flex-shrink: 0;
        }

        .stat-label {
            font-size: 10px;
            color: #8b877f;
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .stat-value {
            font-size: 18px;
            font-weight: 700;
            line-height: 1;
        }

        .stat-value.green {
            color: #16863f;
        }


        /* =========================
           DASHBOARD GRID
        ========================= */

        .dashboard-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 24px;
            align-items: start;
        }

        .panel {
            background: #fffefa;
            border: 1px solid #e4ded4;
            border-radius: 15px;
            padding: 24px;
            box-shadow: 0 2px 7px rgba(0,0,0,.02);
        }

        .panel + .panel {
            margin-top: 24px;
        }

        .panel-title {
            font-size: 15px;
            font-weight: 700;
            padding-bottom: 14px;
            margin-bottom: 16px;
            border-bottom: 1px solid #eee9e1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .panel-title-icon {
            color: #16863f;
            margin-right: 7px;
        }


        /* =========================
           LANJUTKAN BELAJAR
        ========================= */

        .continue-card {
            border: 1px solid #e2ddd5;
            background: #faf8f4;
            border-radius: 12px;
            padding: 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .continue-label {
            color: #16863f;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .continue-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .continue-desc {
            color: #77736d;
            font-size: 11px;
            line-height: 1.5;
        }

        .btn-green {
            border: 0;
            background: #16863f;
            color: white;
            border-radius: 8px;
            padding: 11px 18px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            white-space: nowrap;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-green:hover {
            background: #126e34;
            color: white;
        }


        /* =========================
           PROGRESS
        ========================= */

        .progress-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .progress-number {
            color: #16863f;
            font-size: 12px;
            font-weight: 700;
        }

        .progress-track {
            width: 100%;
            height: 10px;
            background: #ebe7df;
            border: 1px solid #ddd8d0;
            border-radius: 30px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: #16863f;
            border-radius: 30px;
        }

        .progress-description {
            color: #88837c;
            font-size: 11px;
            margin-top: 14px;
            line-height: 1.6;
        }


        /* =========================
           TARGET
        ========================= */

        .target-box {
            background: #fff9dc;
            border: 1px solid #ead878;
            border-radius: 11px;
            padding: 17px;
        }

        .target-top {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .target-track {
            height: 8px;
            background: #f0df70;
            border-radius: 20px;
            overflow: hidden;
        }

        .target-fill {
            height: 100%;
            background: #16863f;
            border-radius: 20px;
        }

        .target-note {
            color: #81765e;
            font-size: 10px;
            margin-top: 10px;
        }


        /* =========================
           HISTORY
        ========================= */

        .history-list {
            display: flex;
            flex-direction: column;
        }

        .history-item {
            display: grid;
            grid-template-columns: 90px 1fr 150px 90px;
            align-items: center;
            gap: 12px;
            padding: 15px 4px;
            border-bottom: 1px solid #eee9e2;
        }

        .history-item:last-child {
            border-bottom: 0;
        }

        .level {
            width: fit-content;
            border-radius: 20px;
            padding: 5px 9px;
            font-size: 9px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .easy {
            color: #16863f;
            background: #e6f4e9;
        }

        .medium {
            color: #a36b00;
            background: #fff1c8;
        }

        .hard {
            color: #c83c32;
            background: #fde9e7;
        }

        .history-label {
            color: #99948c;
            font-size: 9px;
            margin-bottom: 3px;
        }

        .history-value {
            font-size: 11px;
            font-weight: 600;
        }

        .history-score {
            text-align: right;
            font-size: 18px;
            font-weight: 700;
        }

        .history-score small {
            color: #99948c;
            font-size: 9px;
            font-weight: 400;
        }

        .score-pass {
            color: #16863f;
        }

        .score-fail {
            color: #dc3545;
        }

        .empty-state {
            padding: 30px;
            text-align: center;
            color: #88837c;
            font-size: 12px;
        }

        .view-all {
            color: #16863f;
            font-size: 10px;
            font-weight: 600;
        }

        .view-all:hover {
            text-decoration: underline;
        }


        /* =========================
           TABLET
        ========================= */

        @media (max-width: 1000px) {

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }

            .content {
                padding: 24px;
            }
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 768px) {

            .sidebar {
                display: none;
            }

            .main {
                margin-left: 0;
                width: 100%;
            }

            .mobile-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background: white;
                border-bottom: 1px solid #e7e2da;
                padding: 12px 15px;
                position: sticky;
                top: 0;
                z-index: 200;
            }

            .mobile-brand {
                color: #16863f;
                font-weight: 700;
                font-size: 18px;
            }

            .mobile-actions {
                display: flex;
                align-items: center;
                gap: 7px;
            }

            .mobile-menu {
                position: fixed;
                top: 0;
                right: -290px;
                width: min(280px, 85vw);
                height: 100vh;
                background: #fffdf9;
                z-index: 300;
                box-shadow: -4px 0 15px rgba(0,0,0,.12);
                transition: right .25s ease;
                display: flex;
                flex-direction: column;
            }

            .mobile-menu.active {
                right: 0;
            }

            .mobile-menu-header {
                padding: 20px;
                border-bottom: 1px solid #e8e3da;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .mobile-menu-title {
                color: #176c38;
                font-size: 18px;
                font-weight: 700;
            }

            .mobile-close {
                border: none;
                background: transparent;
                font-size: 25px;
                cursor: pointer;
                color: #555;
            }

            .mobile-profile {
                margin: 15px;
                padding: 14px;
                border: 1px solid #e6e0d7;
                background: #f8f5ef;
                border-radius: 12px;
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .mobile-profile .profile-name {
                max-width: 170px;
            }

            .mobile-nav {
                padding: 5px 12px;
                overflow-y: auto;
            }

            .mobile-nav a {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 13px 12px;
                margin-bottom: 4px;
                border-radius: 9px;
                color: #514f4a;
                text-decoration: none;
                font-size: 13px;
            }

            .mobile-nav a:hover {
                background: #f1f5ef;
                color: #16863f;
            }

            .mobile-logout {
                margin-top: auto;
                padding: 15px 12px 20px;
                border-top: 1px solid #eee9e1;
            }

            .mobile-logout button {
                width: 100%;
                border: none;
                background: transparent;
                color: #c83c32;
                padding: 13px 12px;
                text-align: left;
                border-radius: 9px;
                font-size: 13px;
                cursor: pointer;
            }

            .mobile-logout button:hover {
                background: #fff0ee;
            }

            .mobile-overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: rgba(0,0,0,.35);
                z-index: 250;
            }

            .mobile-overlay.active {
                display: block;
            }

            .content {
                padding: 18px 14px 40px;
            }

            .hero {
                padding: 24px 20px;
                border-radius: 14px;
                min-height: auto;
            }

            .hero h1 {
                font-size: 22px;
            }

            .hero p {
                font-size: 12px;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
                gap: 10px;
            }

            .stat-card {
                padding: 14px;
                gap: 9px;
            }

            .stat-icon {
                width: 36px;
                height: 36px;
                font-size: 16px;
            }

            .stat-label {
                font-size: 9px;
            }

            .stat-value {
                font-size: 16px;
            }

            .panel {
                padding: 18px;
                border-radius: 13px;
            }

            .continue-card {
                align-items: flex-start;
                flex-direction: column;
                gap: 15px;
            }

            .continue-card .btn-green {
                width: 100%;
            }

            .progress-header {
                align-items: flex-start;
                flex-direction: column;
                gap: 6px;
            }

            .history-item {
                grid-template-columns: 1fr 1fr;
                gap: 12px;
                padding: 14px 0;
            }

            .history-score {
                text-align: left;
            }

            .history-value {
                font-size: 10px;
            }

            .target-top {
                font-size: 10px;
            }
        }


        /* =========================
           SMALL PHONE
        ========================= */

        @media (max-width: 480px) {

            .mobile-brand {
                font-size: 17px;
            }

            .mobile-menu-button {
                width: 40px;
                height: 40px;
            }

            .mobile-actions .btn-green {
                padding: 10px 13px;
                font-size: 11px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .stat-card {
                min-height: 70px;
            }

            .hero {
                padding: 21px 18px;
            }

            .hero h1 {
                font-size: 20px;
            }

            .hero p {
                font-size: 11px;
                line-height: 1.6;
            }

            .panel-title {
                font-size: 14px;
            }

            .history-item {
                grid-template-columns: 1fr;
            }

            .history-score {
                text-align: left;
            }
        }

    </style>

</head>


<body>

<div class="app">


    {{-- =========================
         SIDEBAR DESKTOP
    ========================== --}}

    <aside class="sidebar">

        <a
            href="{{ route('dashboard') }}"
            class="brand"
        >

            <div class="brand-icon">
                ▣
            </div>

            <div>

                <div class="brand-title">
                    SuraSunda
                </div>

                <div class="brand-subtitle">
                    E-Learning Basa Sunda
                </div>

            </div>

        </a>


        <div class="profile-box">

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

        </div>


        <nav class="nav-menu">

            <a
                href="{{ route('dashboard') }}"
                class="nav-link active"
            >
                <span class="nav-icon">▦</span>
                Dashboard
            </a>


            <a
                href="{{ route('materi.index') }}"
                class="nav-link"
            >
                <span class="nav-icon">▥</span>
                Jalur Belajar
            </a>


            <a
                href="{{ route('latihan') }}"
                class="nav-link"
            >
                <span class="nav-icon">?</span>
                Kuis & Latihan
            </a>


            <a
                href="{{ route('riwayat') }}"
                class="nav-link"
            >
                <span class="nav-icon">▤</span>
                Riwayat Nilai
            </a>


            <a
                href="{{ route('peringkat') }}"
                class="nav-link"
            >
                <span class="nav-icon">♜</span>
                Peringkat
            </a>


            <a
                href="{{ route('prestasi') }}"
                class="nav-link"
            >
                <span class="nav-icon">♙</span>
                Prestasi
            </a>


            <a
                href="{{ route('profil') }}"
                class="nav-link"
            >
                <span class="nav-icon">♧</span>
                Profil Siswa
            </a>

        </nav>


        <div class="sidebar-bottom">

            <form
                action="{{ route('logout') }}"
                method="POST"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-button"
                >

                    <span>↪</span>

                    Keluar / Logout

                </button>

            </form>

        </div>

    </aside>


    {{-- =========================
         MAIN
    ========================== --}}

    <main class="main">


        {{-- =========================
             MOBILE HEADER
        ========================== --}}

        <div class="mobile-header">

            <a
                href="{{ route('dashboard') }}"
                class="mobile-brand"
            >
                SuraSunda
            </a>


            <div class="mobile-actions">

                <a
                    href="{{ route('materi.index') }}"
                    class="btn-green"
                >
                    Belajar
                </a>


                <button
                    type="button"
                    class="mobile-menu-button"
                    onclick="openMobileMenu()"
                    aria-label="Buka menu"
                >
                    ☰
                </button>

            </div>

        </div>


        {{-- =========================
             MOBILE MENU
        ========================== --}}

        <div
            class="mobile-overlay"
            id="mobileOverlay"
            onclick="closeMobileMenu()"
        ></div>


        <aside
            class="mobile-menu"
            id="mobileMenu"
        >

            <div class="mobile-menu-header">

                <div class="mobile-menu-title">
                    SuraSunda
                </div>

                <button
                    type="button"
                    class="mobile-close"
                    onclick="closeMobileMenu()"
                    aria-label="Tutup menu"
                >
                    ×
                </button>

            </div>


            <div class="mobile-profile">

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

            </div>


            <nav class="mobile-nav">

                <a href="{{ route('dashboard') }}">
                    <span>▦</span>
                    Dashboard
                </a>


                <a href="{{ route('materi.index') }}">
                    <span>▥</span>
                    Jalur Belajar
                </a>


                <a href="{{ route('latihan') }}">
                    <span>?</span>
                    Kuis & Latihan
                </a>


                <a href="{{ route('riwayat') }}">
                    <span>▤</span>
                    Riwayat Nilai
                </a>


                <a href="{{ route('peringkat') }}">
                    <span>♜</span>
                    Peringkat
                </a>


                <a href="{{ route('prestasi') }}">
                    <span>♙</span>
                    Prestasi
                </a>


                <a href="{{ route('profil') }}">
                    <span>♧</span>
                    Profil Siswa
                </a>

            </nav>


            <div class="mobile-logout">

                <form
                    action="{{ route('logout') }}"
                    method="POST"
                >

                    @csrf

                    <button type="submit">

                        ↪ &nbsp; Keluar / Logout

                    </button>

                </form>

            </div>

        </aside>


        {{-- =========================
             CONTENT
        ========================== --}}

        <div class="content">


            {{-- HERO --}}

            <section class="hero">

                <div class="student-pill">
                    ◉ Siswa SuraSunda
                </div>

                <h1>
                    Wilujeng Sumping, {{ auth()->user()->name }}!
                </h1>

                <p>
                    Hayu diajar materi Basa Sunda jeung terus tingkatkeun
                    kamampuh anjeun. Selesaikan materi, kerjakan latihan,
                    dan lihat perkembangan belajarmu di sini.
                </p>

            </section>


            {{-- STATISTIK --}}

            <section class="stats-grid">


                <div class="stat-card">

                    <div class="stat-icon">
                        ▥
                    </div>

                    <div>

                        <div class="stat-label">
                            Materi Selesai
                        </div>

                        <div class="stat-value green">
                            {{ $materiSelesai }}/{{ $totalMateri }}
                        </div>

                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        ★
                    </div>

                    <div>

                        <div class="stat-label">
                            Total Latihan
                        </div>

                        <div class="stat-value">
                            {{ $totalLatihan }}
                        </div>

                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        ♜
                    </div>

                    <div>

                        <div class="stat-label">
                            Nilai Tertinggi
                        </div>

                        <div class="stat-value green">
                            {{ $nilaiTertinggi }}/100
                        </div>

                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        ▣
                    </div>

                    <div>

                        <div class="stat-label">
                            Rata-rata Nilai
                        </div>

                        <div class="stat-value green">
                            {{ $rataRata }}/100
                        </div>

                    </div>

                </div>


            </section>


            {{-- DASHBOARD GRID --}}

            <div class="dashboard-grid">


                {{-- KIRI --}}

                <div>


                    {{-- LANJUTKAN BELAJAR --}}

                    <section class="panel">

                        <div class="panel-title">

                            <div>

                                <span class="panel-title-icon">
                                    ✣
                                </span>

                                Lanjutkan Belajar

                            </div>

                        </div>


                        <div class="continue-card">

                            <div>

                                @if ($materiSelesai < $totalMateri)

                                    <div class="continue-label">
                                        Progress Materi
                                    </div>

                                    <div class="continue-title">
                                        Lanjutkan Jalur Belajarmu
                                    </div>

                                    <div class="continue-desc">
                                        Kamu sudah menyelesaikan
                                        {{ $materiSelesai }} dari
                                        {{ $totalMateri }} materi.
                                        Lanjutkan materi berikutnya untuk
                                        membuka lebih banyak latihan.
                                    </div>

                                @else

                                    <div class="continue-label">
                                        Materi Selesai
                                    </div>

                                    <div class="continue-title">
                                        Semua Materi Sudah Dipelajari
                                    </div>

                                    <div class="continue-desc">
                                        Seluruh materi sudah selesai.
                                        Sekarang lanjutkan latihan dan
                                        tingkatkan nilaimu.
                                    </div>

                                @endif

                            </div>


                            @if ($materiSelesai < $totalMateri)

                                <a
                                    href="{{ route('materi.index') }}"
                                    class="btn-green"
                                >
                                    Lanjutkan →
                                </a>

                            @else

                                <a
                                    href="{{ route('latihan') }}"
                                    class="btn-green"
                                >
                                    Mulai Latihan →
                                </a>

                            @endif

                        </div>

                    </section>


                    {{-- PROGRESS TOTAL --}}

                    <section class="panel">

                        <div class="progress-header">

                            <div
                                class="panel-title"
                                style="border:0; margin:0; padding:0;"
                            >
                                Progress Total Pembelajaran
                            </div>

                            <div class="progress-number">

                                {{ $materiSelesai }}/{{ $totalMateri }}
                                Materi ({{ $persentaseMateri }}%)

                            </div>

                        </div>


                        <div class="progress-track">

                            <div
                                class="progress-fill"
                                style="width: {{ $persentaseMateri }}%;"
                            ></div>

                        </div>


                        <div class="progress-description">

                            @if ($persentaseMateri < 100)

                                Selesaikan seluruh materi dalam jalur
                                pembelajaran untuk meningkatkan progress
                                belajarmu.

                            @else

                                Seluruh materi berhasil diselesaikan.
                                Pertahankan hasil belajar melalui latihan.

                            @endif

                        </div>

                    </section>


                    {{-- RIWAYAT NILAI --}}

                    <section class="panel">

                        <div class="panel-title">

                            <div>

                                <span class="panel-title-icon">
                                    ▤
                                </span>

                                Riwayat Nilai

                            </div>

                            <a
                                href="{{ route('riwayat') }}"
                                class="view-all"
                            >
                                Lihat Semua
                            </a>

                        </div>


                        <div class="history-list">

                            @forelse ($quizResults->take(5) as $result)

                                <div class="history-item">

                                    <div>

                                        @if ($result->difficulty === 'easy')

                                            <span class="level easy">
                                                Easy
                                            </span>

                                        @elseif ($result->difficulty === 'medium')

                                            <span class="level medium">
                                                Medium
                                            </span>

                                        @else

                                            <span class="level hard">
                                                Hard
                                            </span>

                                        @endif

                                    </div>


                                    <div>

                                        <div class="history-label">
                                            Jawaban
                                        </div>

                                        <div class="history-value">
                                            {{ $result->correct }} Benar /
                                            {{ $result->wrong }} Salah
                                        </div>

                                    </div>


                                    <div>

                                        <div class="history-label">
                                            Tanggal
                                        </div>

                                        <div class="history-value">
                                            {{ $result->created_at->format('d M Y, H:i') }}
                                        </div>

                                    </div>


                                    <div
                                        class="history-score
                                        {{ $result->score >= 70
                                            ? 'score-pass'
                                            : 'score-fail' }}"
                                    >

                                        {{ $result->score }}

                                        <small>
                                            /100
                                        </small>

                                    </div>

                                </div>

                            @empty

                                <div class="empty-state">

                                    Belum ada riwayat latihan.
                                    Selesaikan latihan pertamamu untuk
                                    melihat nilai di sini.

                                </div>

                            @endforelse

                        </div>

                    </section>

                </div>


                {{-- KANAN --}}

                <div>


                    {{-- TARGET BELAJAR --}}

                    <section class="panel">

                        <div class="panel-title">

                            <div>

                                <span style="color:#d58a00;">
                                    ◎
                                </span>

                                Target Belajar

                            </div>

                        </div>


                        @php

                            $targetMateri = $totalMateri > 0
                                ? $totalMateri
                                : 1;

                            $targetProgress = min(
                                100,
                                round(
                                    ($materiSelesai / $targetMateri) * 100
                                )
                            );

                        @endphp


                        <div class="target-box">

                            <div class="target-top">

                                <span>
                                    Selesaikan Materi
                                </span>

                                <span>
                                    {{ $materiSelesai }}/{{ $totalMateri }}
                                </span>

                            </div>


                            <div class="target-track">

                                <div
                                    class="target-fill"
                                    style="width: {{ $targetProgress }}%;"
                                ></div>

                            </div>


                            <div class="target-note">

                                @if ($materiSelesai < $totalMateri)

                                    Masih ada
                                    {{ $totalMateri - $materiSelesai }}
                                    materi yang perlu diselesaikan.

                                @else

                                    Target materi sudah tercapai. Mantap!

                                @endif

                            </div>

                        </div>

                    </section>


                    {{-- STATUS BELAJAR --}}

                    <section class="panel">

                        <div class="panel-title">

                            <div>

                                <span style="color:#7c3aed;">
                                    ♙
                                </span>

                                Status Belajar

                            </div>

                        </div>


                        <div class="continue-card">

                            <div>

                                <div class="continue-label">
                                    Progress Saat Ini
                                </div>

                                <div class="continue-title">
                                    {{ $persentaseMateri }}% Materi Selesai
                                </div>

                                <div class="continue-desc">

                                    @if ($nilaiTertinggi >= 70)

                                        Kamu sudah memiliki nilai latihan
                                        yang mencapai batas kelulusan.

                                    @elseif ($totalLatihan > 0)

                                        Nilai terbaikmu saat ini
                                        {{ $nilaiTertinggi }}.
                                        Target berikutnya adalah minimal 70.

                                    @else

                                        Kamu belum mengerjakan latihan.
                                        Selesaikan materi lalu mulai
                                        latihan pertama.

                                    @endif

                                </div>

                            </div>

                        </div>

                    </section>

                </div>

            </div>

        </div>

    </main>

</div>


<script>

    function openMobileMenu() {

        document
            .getElementById('mobileMenu')
            .classList.add('active');

        document
            .getElementById('mobileOverlay')
            .classList.add('active');

        document.body.style.overflow = 'hidden';
    }


    function closeMobileMenu() {

        document
            .getElementById('mobileMenu')
            .classList.remove('active');

        document
            .getElementById('mobileOverlay')
            .classList.remove('active');

        document.body.style.overflow = '';
    }


    // Tutup menu jika tombol Escape ditekan

    document.addEventListener('keydown', function(event) {

        if (event.key === 'Escape') {

            closeMobileMenu();

        }

    });


    // Jika ukuran layar kembali ke desktop,
    // pastikan menu mobile ditutup.

    window.addEventListener('resize', function() {

        if (window.innerWidth > 768) {

            closeMobileMenu();

        }

    });

</script>


</body>

</html>