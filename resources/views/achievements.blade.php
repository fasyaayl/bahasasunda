<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Prestasi - SuraSunda</title>

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

        /* SIDEBAR */

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
            font-weight: 700;
        }

        .brand-title {
            color: #176c38;
            font-size: 20px;
            font-weight: 700;
        }

        .brand-subtitle {
            font-size: 10px;
            color: #88847c;
            margin-top: 3px;
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
        }

        .profile-name {
            font-weight: 700;
            font-size: 13px;
        }

        .profile-role {
            display: inline-block;
            background: #e3f1e5;
            color: #176c38;
            border-radius: 5px;
            padding: 2px 6px;
            font-size: 9px;
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
            border: 0;
            background: transparent;
            color: #c83c32;
            min-height: 42px;
            border-radius: 9px;
            text-align: left;
            padding: 0 14px;
            cursor: pointer;
        }

        .logout-button:hover {
            background: #fff0ee;
        }

        /* MAIN */

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
        }

        .content {
            max-width: 1080px;
            margin: auto;
            padding: 32px 32px 60px;
        }

        .hero {
            background: #176b37;
            color: white;
            border-radius: 17px;
            padding: 30px 34px;
            margin-bottom: 24px;
        }

        .hero-label {
            display: inline-block;
            background: rgba(0,0,0,.15);
            border-radius: 6px;
            padding: 6px 11px;
            font-size: 10px;
            margin-bottom: 12px;
        }

        .hero h1 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .hero p {
            color: #e7f5ea;
            font-size: 12px;
            line-height: 1.7;
        }

        /* STATS */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-bottom: 25px;
        }

        .stat {
            background: #fffefa;
            border: 1px solid #e4ded4;
            border-radius: 13px;
            padding: 18px;
        }

        .stat-label {
            color: #8c877f;
            font-size: 10px;
            text-transform: uppercase;
            margin-bottom: 7px;
        }

        .stat-value {
            color: #16863f;
            font-size: 20px;
            font-weight: 700;
        }

        /* PROGRESS */

        .progress-panel {
            background: #fffefa;
            border: 1px solid #e4ded4;
            border-radius: 15px;
            padding: 22px;
            margin-bottom: 25px;
        }

        .progress-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 12px;
            font-weight: 700;
        }

        .progress-track {
            height: 10px;
            border-radius: 20px;
            background: #e9e5dd;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: #16863f;
            border-radius: 20px;
        }

        /* ACHIEVEMENTS */

        .section-title {
            font-size: 18px;
            margin-bottom: 16px;
        }

        .achievement-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .achievement-card {
            background: #fffefa;
            border: 1px solid #e4ded4;
            border-radius: 15px;
            padding: 20px;
            display: flex;
            gap: 16px;
            min-height: 150px;
        }

        .achievement-card.unlocked {
            border-color: #afd2b7;
            background: #fbfffc;
        }

        .achievement-card.locked {
            opacity: .62;
        }

        .achievement-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            background: #f0eee8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            flex-shrink: 0;
        }

        .unlocked .achievement-icon {
            background: #e4f3e7;
        }

        .achievement-info {
            flex: 1;
        }

        .achievement-top {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 5px;
        }

        .achievement-title {
            font-size: 14px;
            font-weight: 700;
        }

        .badge {
            padding: 4px 8px;
            border-radius: 20px;
            font-size: 9px;
            font-weight: 700;
            white-space: nowrap;
        }

        .badge-unlocked {
            color: #16863f;
            background: #e4f3e7;
        }

        .badge-locked {
            color: #777;
            background: #ece9e3;
        }

        .achievement-description {
            color: #807b74;
            font-size: 11px;
            line-height: 1.6;
            margin-bottom: 13px;
        }

        .small-progress {
            height: 7px;
            background: #e8e4dd;
            border-radius: 20px;
            overflow: hidden;
        }

        .small-progress-fill {
            height: 100%;
            background: #16863f;
            border-radius: 20px;
        }

        .achievement-count {
            color: #918c84;
            font-size: 9px;
            margin-top: 6px;
        }

        @media (max-width: 900px) {
            .stats {
                grid-template-columns: 1fr 1fr;
            }

            .achievement-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 700px) {
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
        }

        @media (max-width: 480px) {
            .stats {
                grid-template-columns: 1fr;
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

            <a href="{{ route('prestasi') }}" class="nav-link active">
                <span class="nav-icon">♙</span>
                Prestasi
            </a>

            <a href="{{ route('profil') }}" class="nav-link">
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
                    🏆 Prestasi Siswa
                </div>

                <h1>
                    Prestasimu
                </h1>

                <p>
                    Selesaikan materi dan latihan untuk membuka berbagai
                    pencapaian selama belajar Basa Sunda.
                </p>

            </section>


            <section class="stats">

                <div class="stat">
                    <div class="stat-label">Prestasi Terbuka</div>
                    <div class="stat-value">
                        {{ $prestasiTerbuka }}/{{ $totalPrestasi }}
                    </div>
                </div>

                <div class="stat">
                    <div class="stat-label">Materi Selesai</div>
                    <div class="stat-value">
                        {{ $materiSelesai }}/{{ $totalMateri }}
                    </div>
                </div>

                <div class="stat">
                    <div class="stat-label">Total Latihan</div>
                    <div class="stat-value">
                        {{ $totalLatihan }}
                    </div>
                </div>

                <div class="stat">
                    <div class="stat-label">Nilai Tertinggi</div>
                    <div class="stat-value">
                        {{ $nilaiTertinggi }}/100
                    </div>
                </div>

            </section>


            <section class="progress-panel">

                <div class="progress-header">
                    <span>Progress Prestasi</span>

                    <span>
                        {{ $persentasePrestasi }}%
                    </span>
                </div>

                <div class="progress-track">

                    <div
                        class="progress-fill"
                        style="width: {{ $persentasePrestasi }}%;"
                    ></div>

                </div>

            </section>


            <h2 class="section-title">
                Koleksi Prestasi
            </h2>


            <section class="achievement-grid">

                @foreach ($achievements as $achievement)

                    @php

                        $percentage = $achievement['target'] > 0
                            ? min(
                                100,
                                round(
                                    ($achievement['progress'] /
                                    $achievement['target']) * 100
                                )
                            )
                            : 0;

                    @endphp


                    <div
                        class="achievement-card
                        {{ $achievement['unlocked']
                            ? 'unlocked'
                            : 'locked' }}"
                    >

                        <div class="achievement-icon">
                            {{ $achievement['icon'] }}
                        </div>


                        <div class="achievement-info">

                            <div class="achievement-top">

                                <div class="achievement-title">
                                    {{ $achievement['title'] }}
                                </div>


                                @if ($achievement['unlocked'])

                                    <span class="badge badge-unlocked">
                                        ✓ Terbuka
                                    </span>

                                @else

                                    <span class="badge badge-locked">
                                        🔒 Terkunci
                                    </span>

                                @endif

                            </div>


                            <div class="achievement-description">
                                {{ $achievement['description'] }}
                            </div>


                            <div class="small-progress">

                                <div
                                    class="small-progress-fill"
                                    style="width: {{ $percentage }}%;"
                                ></div>

                            </div>


                            <div class="achievement-count">

                                @if ($achievement['unlocked'])

                                    Prestasi berhasil diperoleh.

                                @else

                                    Progress:
                                    {{ $achievement['progress'] }}
                                    /
                                    {{ $achievement['target'] }}

                                @endif

                            </div>

                        </div>

                    </div>

                @endforeach

            </section>

        </div>

    </main>

</div>

</body>
</html>