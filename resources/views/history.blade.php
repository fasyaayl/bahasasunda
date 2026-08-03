<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Riwayat Nilai - SuraSunda</title>

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
            font-size: 13px;
            font-weight: 700;
        }

        .profile-role {
            display: inline-block;
            background: #e3f1e5;
            color: #176c38;
            border: 1px solid #cfe4d2;
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

        .nav-link.disabled {
            opacity: .5;
            cursor: default;
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
            min-height: 100vh;
        }

        .content {
            max-width: 1080px;
            margin: 0 auto;
            padding: 32px;
        }

        /* HERO */

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
            font-weight: 600;
            margin-bottom: 12px;
        }

        .hero h1 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .hero p {
            color: #e8f5eb;
            font-size: 12px;
            line-height: 1.7;
        }

        /* STAT */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin-bottom: 24px;
        }

        .stat {
            background: #fffefa;
            border: 1px solid #e4ded4;
            border-radius: 12px;
            padding: 17px;
        }

        .stat-label {
            color: #8c877f;
            font-size: 9px;
            text-transform: uppercase;
            margin-bottom: 7px;
        }

        .stat-value {
            font-size: 21px;
            font-weight: 700;
        }

        .green {
            color: #16863f;
        }

        /* HISTORY */

        .panel {
            background: #fffefa;
            border: 1px solid #e4ded4;
            border-radius: 15px;
            overflow: hidden;
        }

        .panel-header {
            padding: 22px;
            border-bottom: 1px solid #ebe6de;
        }

        .panel-header h2 {
            font-size: 16px;
            margin-bottom: 4px;
        }

        .panel-header p {
            font-size: 10px;
            color: #8c877f;
        }

        .table-head,
        .history-row {
            display: grid;
            grid-template-columns: 120px 1fr 1fr 170px 110px;
            align-items: center;
            gap: 15px;
        }

        .table-head {
            padding: 12px 22px;
            background: #f8f6f1;
            color: #8b867f;
            font-size: 9px;
            text-transform: uppercase;
            font-weight: 600;
        }

        .history-row {
            padding: 16px 22px;
            border-top: 1px solid #eee9e2;
        }

        .badge {
            width: fit-content;
            padding: 5px 10px;
            border-radius: 20px;
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

        .data-label {
            display: none;
            color: #99948c;
            font-size: 8px;
            margin-bottom: 3px;
        }

        .data-value {
            font-size: 11px;
            font-weight: 600;
        }

        .score {
            font-size: 18px;
            font-weight: 700;
        }

        .score.pass {
            color: #16863f;
        }

        .score.fail {
            color: #dc3545;
        }

        .score small {
            color: #99948c;
            font-size: 9px;
            font-weight: 400;
        }

        .status {
            width: fit-content;
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 9px;
            font-weight: 600;
        }

        .status.pass {
            color: #16863f;
            background: #e5f4e8;
        }

        .status.fail {
            color: #dc3545;
            background: #fdeaea;
        }

        .empty {
            padding: 45px 20px;
            text-align: center;
            color: #88837c;
            font-size: 12px;
        }

        .empty a {
            display: inline-block;
            background: #16863f;
            color: white;
            border-radius: 8px;
            padding: 10px 15px;
            margin-top: 13px;
        }

        @media (max-width: 900px) {
            .stats {
                grid-template-columns: 1fr 1fr;
            }

            .table-head {
                display: none;
            }

            .history-row {
                grid-template-columns: 1fr 1fr;
            }

            .data-label {
                display: block;
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

            <a href="{{ route('riwayat') }}" class="nav-link active">
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

            <a
    href="{{ route('profil') }}"
    class="nav-link"
>
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
                    ▤ Riwayat Belajar
                </div>

                <h1>
                    Riwayat Nilai
                </h1>

                <p>
                    Lihat seluruh hasil latihan yang pernah kamu kerjakan
                    dan pantau perkembangan nilaimu dari waktu ke waktu.
                </p>

            </section>


            <section class="stats">

                <div class="stat">
                    <div class="stat-label">Total Latihan</div>
                    <div class="stat-value">
                        {{ $totalLatihan }}
                    </div>
                </div>

                <div class="stat">
                    <div class="stat-label">Nilai Tertinggi</div>
                    <div class="stat-value green">
                        {{ $nilaiTertinggi }}/100
                    </div>
                </div>

                <div class="stat">
                    <div class="stat-label">Rata-rata Nilai</div>
                    <div class="stat-value">
                        {{ $rataRata }}/100
                    </div>
                </div>

                <div class="stat">
                    <div class="stat-label">Latihan Lulus</div>
                    <div class="stat-value green">
                        {{ $totalLulus }}
                    </div>
                </div>

            </section>


            <section class="panel">

                <div class="panel-header">

                    <h2>
                        Semua Riwayat Latihan
                    </h2>

                    <p>
                        Nilai minimum kelulusan adalah 70.
                    </p>

                </div>


                <div class="table-head">

                    <div>Tingkat</div>
                    <div>Jawaban</div>
                    <div>Status</div>
                    <div>Tanggal</div>
                    <div>Nilai</div>

                </div>


                @forelse ($quizResults as $result)

                    <div class="history-row">

                        <div>

                            @if ($result->difficulty === 'easy')

                                <span class="badge easy">
                                    Easy
                                </span>

                            @elseif ($result->difficulty === 'medium')

                                <span class="badge medium">
                                    Medium
                                </span>

                            @else

                                <span class="badge hard">
                                    Hard
                                </span>

                            @endif

                        </div>


                        <div>

                            <div class="data-label">
                                Jawaban
                            </div>

                            <div class="data-value">
                                {{ $result->correct }} Benar /
                                {{ $result->wrong }} Salah
                            </div>

                        </div>


                        <div>

                            <div class="data-label">
                                Status
                            </div>

                            @if ($result->score >= 70)

                                <span class="status pass">
                                    ✓ Lulus
                                </span>

                            @else

                                <span class="status fail">
                                    Belum Lulus
                                </span>

                            @endif

                        </div>


                        <div>

                            <div class="data-label">
                                Tanggal
                            </div>

                            <div class="data-value">
                                {{ $result->created_at->format('d M Y, H:i') }}
                            </div>

                        </div>


                        <div
                            class="score {{ $result->score >= 70 ? 'pass' : 'fail' }}"
                        >
                            {{ $result->score }}

                            <small>/100</small>
                        </div>

                    </div>

                @empty

                    <div class="empty">

                        Kamu belum memiliki riwayat latihan.

                        <br>

                        <a href="{{ route('latihan') }}">
                            Mulai Latihan
                        </a>

                    </div>

                @endforelse

            </section>

        </div>

    </main>

</div>

</body>
</html>