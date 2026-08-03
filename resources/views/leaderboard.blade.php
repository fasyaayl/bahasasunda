<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Peringkat - SuraSunda
    </title>

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


        /* =========================================================
           SIDEBAR
        ========================================================= */

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


        /* =========================================================
           PROFILE SIDEBAR
        ========================================================= */

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


        /* =========================================================
           NAVIGATION
        ========================================================= */

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


        /* =========================================================
           LOGOUT
        ========================================================= */

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

            gap: 10px;
        }


        .logout-button:hover {
            background: #fff0ee;
        }


        /* =========================================================
           MAIN
        ========================================================= */

        .main {
            margin-left: 250px;

            width: calc(100% - 250px);

            min-height: 100vh;
        }


        .content {
            max-width: 1080px;

            margin: 0 auto;

            padding: 32px 32px 60px;
        }


        /* =========================================================
           HERO
        ========================================================= */

        .hero {
            background: #176b37;

            border-radius: 17px;

            padding: 31px 34px;

            color: white;

            margin-bottom: 24px;
        }


        .hero-label {
            display: inline-block;

            background: rgba(0,0,0,.15);

            padding: 6px 11px;

            border-radius: 6px;

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

            max-width: 650px;
        }


        /* =========================================================
           MY RANK
        ========================================================= */

        .my-rank {
            background: #fffefa;

            border: 1px solid #e4ded4;

            border-radius: 15px;

            padding: 22px;

            margin-bottom: 24px;
        }


        .section-title {
            font-size: 16px;

            font-weight: 700;

            margin-bottom: 16px;
        }


        .rank-summary {
            display: grid;

            grid-template-columns: 1.3fr repeat(4, 1fr);

            gap: 12px;
        }


        .summary-box {
            background: #faf8f4;

            border: 1px solid #e8e2d9;

            border-radius: 11px;

            padding: 15px;
        }


        .summary-box.highlight {
            background: #eaf5ec;

            border-color: #bad8c1;
        }


        .summary-label {
            color: #88837c;

            font-size: 9px;

            text-transform: uppercase;

            margin-bottom: 6px;
        }


        .summary-value {
            font-size: 19px;

            font-weight: 700;
        }


        .summary-value.green {
            color: #16863f;
        }


        /* =========================================================
           LEADERBOARD
        ========================================================= */

        .leaderboard-panel {
            background: #fffefa;

            border: 1px solid #e4ded4;

            border-radius: 15px;

            overflow: hidden;
        }


        .leaderboard-header {
            padding: 21px 23px;

            border-bottom: 1px solid #ebe6de;

            display: flex;

            justify-content: space-between;

            align-items: center;
        }


        .leaderboard-header h2 {
            font-size: 16px;
        }


        .leaderboard-header p {
            color: #918c84;

            font-size: 10px;

            margin-top: 4px;
        }


        .table-header,
        .player-row {
            display: grid;

            grid-template-columns:
                80px
                1.8fr
                1fr
                1fr
                1fr
                1fr;

            align-items: center;

            gap: 10px;
        }


        .table-header {
            padding: 12px 22px;

            background: #f8f6f1;

            border-bottom: 1px solid #ebe6de;

            color: #8b867f;

            font-size: 9px;

            text-transform: uppercase;

            font-weight: 600;
        }


        .player-row {
            padding: 15px 22px;

            border-bottom: 1px solid #eee9e2;
        }


        .player-row:last-child {
            border-bottom: none;
        }


        .player-row.me {
            background: #f1f8f2;
        }


        /* =========================================================
           RANK NUMBER
        ========================================================= */

        .rank-number {
            width: 38px;
            height: 38px;

            border-radius: 10px;

            background: #f0ede7;

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: 700;

            font-size: 13px;
        }


        .rank-1 {
            background: #fff2b8;

            color: #9a6b00;
        }


        .rank-2 {
            background: #eeeeee;

            color: #666;
        }


        .rank-3 {
            background: #f5dfce;

            color: #9b5c2f;
        }


        /* =========================================================
           STUDENT
        ========================================================= */

        .student {
            display: flex;

            align-items: center;

            gap: 11px;

            min-width: 0;
        }


        .student-avatar {
            width: 37px;
            height: 37px;

            border-radius: 50%;

            background: #dcecdf;

            color: #176c38;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 13px;

            font-weight: 700;

            flex-shrink: 0;
        }


        .student-name {
            font-size: 12px;

            font-weight: 700;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .you {
            display: inline-block;

            color: #16863f;

            background: #e1f1e4;

            border-radius: 4px;

            font-size: 8px;

            padding: 2px 5px;

            margin-top: 3px;
        }


        .data-value {
            font-size: 12px;

            font-weight: 600;
        }


        .highest {
            color: #16863f;

            font-weight: 700;
        }


        .empty {
            text-align: center;

            padding: 40px 20px;

            color: #88837c;

            font-size: 12px;
        }


        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 950px) {

            .rank-summary {
                grid-template-columns: 1fr 1fr;
            }


            .table-header {
                display: none;
            }


            .player-row {
                grid-template-columns:
                    55px
                    1fr
                    1fr;

                row-gap: 12px;
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
                padding: 20px 15px 40px;
            }


            .rank-summary {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>

<div class="app">


    {{-- =========================================================
         SIDEBAR
    ========================================================== --}}

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


        {{-- PROFILE --}}

        <div class="profile-box">

            <div class="avatar">

                {{ strtoupper(
                    substr(
                        auth()->user()->name,
                        0,
                        1
                    )
                ) }}

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


        {{-- MENU --}}

        <nav class="nav-menu">


            <a
                href="{{ route('dashboard') }}"
                class="nav-link"
            >

                <span class="nav-icon">
                    ▦
                </span>

                Dashboard

            </a>


            <a
                href="{{ route('materi.index') }}"
                class="nav-link"
            >

                <span class="nav-icon">
                    ▥
                </span>

                Jalur Belajar

            </a>


            <a
                href="{{ route('latihan') }}"
                class="nav-link"
            >

                <span class="nav-icon">
                    ?
                </span>

                Kuis & Latihan

            </a>


            <a
                href="{{ route('riwayat') }}"
                class="nav-link"
            >

                <span class="nav-icon">
                    ▤
                </span>

                Riwayat Nilai

            </a>


            <a
                href="{{ route('peringkat') }}"
                class="nav-link active"
            >

                <span class="nav-icon">
                    ♜
                </span>

                Peringkat

            </a>


            <a
                href="{{ route('prestasi') }}"
                class="nav-link"
            >

                <span class="nav-icon">
                    ♙
                </span>

                Prestasi

            </a>


            <a href="{{ route('profil') }}" class="nav-link">
                <span class="nav-icon">♧</span>
                Profil Siswa
            </a>


        </nav>


        {{-- LOGOUT --}}

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

                    <span>
                        ↪
                    </span>

                    Keluar / Logout

                </button>

            </form>

        </div>


    </aside>


    {{-- =========================================================
         MAIN CONTENT
    ========================================================== --}}

    <main class="main">

        <div class="content">


            {{-- HERO --}}

            <section class="hero">

                <div class="hero-label">
                    🏆 Peringkat Siswa
                </div>


                <h1>
                    Papan Peringkat
                </h1>


                <p>
                    Lihat perkembangan belajarmu dibandingkan siswa lainnya.
                    Tingkatkan nilai dan terus kerjakan latihan untuk naik
                    ke posisi peringkat yang lebih tinggi.
                </p>

            </section>


            {{-- =================================================
                 PERINGKAT SAYA
            ================================================== --}}

            <section class="my-rank">


                <div class="section-title">
                    Peringkat Saya
                </div>


                @if ($myRanking)


                    <div class="rank-summary">


                        {{-- RANK --}}

                        <div class="summary-box highlight">

                            <div class="summary-label">
                                Posisi Saat Ini
                            </div>


                            <div class="summary-value green">

                                #{{ $myRanking['rank'] }}

                            </div>

                        </div>


                        {{-- HIGHEST --}}

                        <div class="summary-box">

                            <div class="summary-label">
                                Nilai Tertinggi
                            </div>


                            <div class="summary-value">

                                {{ $myRanking['highest_score'] }}

                            </div>

                        </div>


                        {{-- AVERAGE --}}

                        <div class="summary-box">

                            <div class="summary-label">
                                Rata-rata Nilai
                            </div>


                            <div class="summary-value">

                                {{ $myRanking['average_score'] }}

                            </div>

                        </div>


                        {{-- TOTAL --}}

                        <div class="summary-box">

                            <div class="summary-label">
                                Total Latihan
                            </div>


                            <div class="summary-value">

                                {{ $myRanking['total_quiz'] }}

                            </div>

                        </div>


                        {{-- PASSED --}}

                        <div class="summary-box">

                            <div class="summary-label">
                                Latihan Lulus
                            </div>


                            <div class="summary-value">

                                {{ $myRanking['passed_quiz'] }}

                            </div>

                        </div>


                    </div>


                @else


                    <div class="empty">

                        Data peringkat kamu belum tersedia.

                    </div>


                @endif


            </section>


            {{-- =================================================
                 LEADERBOARD
            ================================================== --}}

            <section class="leaderboard-panel">


                <div class="leaderboard-header">

                    <div>

                        <h2>
                            Peringkat Siswa SuraSunda
                        </h2>


                        <p>
                            Peringkat berdasarkan nilai tertinggi,
                            rata-rata nilai, dan jumlah latihan.
                        </p>

                    </div>

                </div>


                {{-- TABLE HEADER --}}

                <div class="table-header">

                    <div>
                        Peringkat
                    </div>

                    <div>
                        Siswa
                    </div>

                    <div>
                        Nilai Tertinggi
                    </div>

                    <div>
                        Rata-rata
                    </div>

                    <div>
                        Total Latihan
                    </div>

                    <div>
                        Lulus
                    </div>

                </div>


                {{-- DATA SISWA --}}

                @forelse ($leaderboard as $student)


                    <div
                        class="player-row
                        {{ $student['id'] === auth()->id()
                            ? 'me'
                            : '' }}"
                    >


                        {{-- RANK --}}

                        <div>

                            <div
                                class="
                                    rank-number

                                    {{ $student['rank'] === 1
                                        ? 'rank-1'
                                        : '' }}

                                    {{ $student['rank'] === 2
                                        ? 'rank-2'
                                        : '' }}

                                    {{ $student['rank'] === 3
                                        ? 'rank-3'
                                        : '' }}
                                "
                            >


                                @if ($student['rank'] === 1)

                                    🥇

                                @elseif ($student['rank'] === 2)

                                    🥈

                                @elseif ($student['rank'] === 3)

                                    🥉

                                @else

                                    {{ $student['rank'] }}

                                @endif


                            </div>

                        </div>


                        {{-- SISWA --}}

                        <div class="student">


                            <div class="student-avatar">

                                {{ strtoupper(
                                    substr(
                                        $student['name'],
                                        0,
                                        1
                                    )
                                ) }}

                            </div>


                            <div>


                                <div class="student-name">

                                    {{ $student['name'] }}

                                </div>


                                @if (
                                    $student['id']
                                    ===
                                    auth()->id()
                                )

                                    <span class="you">
                                        Kamu
                                    </span>

                                @endif


                            </div>


                        </div>


                        {{-- NILAI TERTINGGI --}}

                        <div class="data-value highest">

                            {{ $student['highest_score'] }}/100

                        </div>


                        {{-- RATA RATA --}}

                        <div class="data-value">

                            {{ $student['average_score'] }}/100

                        </div>


                        {{-- TOTAL QUIZ --}}

                        <div class="data-value">

                            {{ $student['total_quiz'] }}

                        </div>


                        {{-- LULUS --}}

                        <div class="data-value">

                            {{ $student['passed_quiz'] }}

                        </div>


                    </div>


                @empty


                    <div class="empty">

                        Belum ada data siswa untuk ditampilkan.

                    </div>


                @endforelse


            </section>


        </div>

    </main>


</div>

</body>
</html>