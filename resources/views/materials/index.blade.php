<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Jalur Belajar - SuraSunda</title>

<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
*{
    box-sizing:border-box;
    margin:0;
    padding:0;
}

body{
    font-family:'Plus Jakarta Sans',sans-serif;
    background:#faf9f6;
    color:#252525;
}

a{
    text-decoration:none;
    color:inherit;
}

/* =========================
   SIDEBAR
========================= */

.sidebar{
    position:fixed;
    left:0;
    top:0;
    bottom:0;
    width:250px;
    background:#fff;
    border-right:1px solid #e7e2da;
    display:flex;
    flex-direction:column;
    z-index:20;
}

/* BRAND */

.brand{
    padding:24px 20px;
    border-bottom:1px solid #eee8df;
    display:flex;
    gap:12px;
    align-items:center;
}

.brand-icon{
    width:40px;
    height:40px;
    border-radius:10px;
    background:#178844;
    color:#fff;
    display:grid;
    place-items:center;
    font-weight:700;
}

.brand-name{
    font-size:20px;
    color:#16763d;
    font-weight:700;
}

.brand-sub{
    font-size:10px;
    color:#888;
}

/* =========================
   USER PROFILE
========================= */

.user-box{
    margin:16px 12px 0;
    padding:13px 14px;
    border:1px solid #e7e2da;
    border-radius:12px;
    background:#faf9f6;
    display:flex;
    align-items:center;
    gap:11px;
    transition:.15s;
}

.user-box:hover{
    border-color:#b8d6c0;
    background:#f5faf6;
}

.user-avatar{
    width:38px;
    height:38px;
    border-radius:50%;
    background:#dff2e5;
    color:#16863f;
    display:grid;
    place-items:center;
    font-size:15px;
    font-weight:700;
    flex-shrink:0;
}

.user-info{
    min-width:0;
}

.user-name{
    font-size:12px;
    font-weight:700;
    color:#252525;
    white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis;
}

.user-role{
    display:inline-block;
    margin-top:4px;
    padding:2px 5px;
    border-radius:4px;
    background:#dff2e5;
    color:#16863f;
    font-size:8px;
    font-weight:600;
}

/* =========================
   NAVIGATION
========================= */

.nav{
    padding:12px;
}

.nav a{
    display:flex;
    align-items:center;
    gap:12px;
    padding:12px 14px;
    margin-bottom:5px;
    border-radius:9px;
    font-size:13px;
    transition:.15s;
}

.nav a:hover,
.nav a.active{
    background:#178844;
    color:#fff;
}

.nav-icon{
    width:20px;
    text-align:center;
}

/* =========================
   BOTTOM SIDEBAR
========================= */

.side-bottom{
    margin-top:auto;
    padding:16px 14px;
    border-top:1px solid #eee8df;
}

.logout{
    border:0;
    background:none;
    color:#c53d32;
    cursor:pointer;
    font:inherit;
    font-size:13px;
}

/* =========================
   MAIN
========================= */

.main{
    margin-left:250px;
    min-height:100vh;
}

.topbar{
    height:54px;
    background:#fff;
    border-bottom:1px solid #e7e2da;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:13px;
}

.content{
    max-width:850px;
    margin:auto;
    padding:34px 24px 60px;
}

/* =========================
   HERO
========================= */

.hero,
.unit{
    background:#fff;
    border:1px solid #ded8ce;
    border-radius:15px;
}

.hero{
    padding:25px;
    margin-bottom:28px;
}

.pill{
    display:inline-block;
    background:#e8f5ea;
    border:1px solid #b9dcbc;
    color:#16863f;
    padding:5px 10px;
    border-radius:6px;
    font-size:10px;
    font-weight:700;
}

.hero h1{
    font-size:24px;
    margin:10px 0 5px;
}

.muted{
    color:#88837b;
    font-size:11px;
    line-height:1.5;
}

/* =========================
   UNIT
========================= */

.unit{
    margin-bottom:28px;
    overflow:hidden;
}

.unit-head{
    padding:22px 24px;
    display:flex;
    align-items:center;
    gap:14px;
    border-bottom:1px solid #eee8df;
}

.unit-no{
    width:38px;
    height:38px;
    border-radius:9px;
    background:#16863f;
    color:#fff;
    display:grid;
    place-items:center;
    font-weight:700;
}

.unit-info{
    flex:1;
}

.unit-title{
    font-weight:700;
    font-size:15px;
    margin-bottom:3px;
}

.unit-progress{
    width:125px;
    text-align:right;
    font-size:10px;
}

.unit-progress b{
    font-size:11px;
}

.mini-track{
    height:7px;
    background:#ece8e0;
    border-radius:20px;
    margin-top:7px;
    overflow:hidden;
}

.mini-fill{
    height:100%;
    background:#16863f;
    border-radius:20px;
}

/* =========================
   LEVEL
========================= */

.levels{
    padding:24px 55px 25px 95px;
}

.level-row{
    position:relative;
    display:flex;
    align-items:center;
    margin-bottom:14px;
}

.level-row:before{
    content:"";
    position:absolute;
    left:-38px;
    top:37px;
    width:1px;
    height:29px;
    background:#ded8ce;
}

.level-row:last-child:before{
    display:none;
}

.level-icon{
    position:absolute;
    left:-55px;
    width:40px;
    height:40px;
    border-radius:10px;
    background:#16863f;
    color:#fff;
    display:grid;
    place-items:center;
    font-weight:700;
}

.level-card{
    width:100%;
    min-height:58px;
    border:1px solid #ddd8cf;
    border-radius:10px;
    padding:11px 14px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:12px;
    transition:.15s;
}

.level-card:hover{
    border-color:#16863f;
    background:#f5faf6;
}

.level-card.done{
    background:#f0f8ee;
    border-color:#b8d6b2;
}

.level-name{
    font-size:12px;
    font-weight:700;
}

.level-desc{
    font-size:10px;
    color:#888;
    margin-top:3px;
}

.xp{
    background:#e4f2df;
    color:#16863f;
    border-radius:12px;
    padding:4px 8px;
    font-size:9px;
    font-weight:700;
    white-space:nowrap;
}

/* =========================
   QUIZ
========================= */

.quiz-row .level-icon{
    background:#e58a00;
}

.quiz-row .level-card{
    background:#fff9dd;
    border-color:#e6cf65;
}

.quiz-row .xp{
    background:#ffeaa0;
    color:#8c6800;
}

/* =========================
   MOBILE
========================= */

.mobile-head{
    display:none;
}

@media(max-width:760px){

    .sidebar{
        display:none;
    }

    .main{
        margin-left:0;
    }

    .topbar{
        display:none;
    }

    .mobile-head{
        display:flex;
        padding:15px 18px;
        background:#fff;
        border-bottom:1px solid #e7e2da;
        justify-content:space-between;
    }

    .content{
        padding:20px 14px;
    }

    .hero{
        padding:20px;
    }

    .hero h1{
        font-size:20px;
    }

    .unit-head{
        padding:17px;
    }

    .unit-progress{
        width:90px;
    }

    .levels{
        padding:18px 15px 18px 65px;
    }

    .level-row:before{
        left:-29px;
    }

    .level-icon{
        left:-43px;
        width:34px;
        height:34px;
    }

    .level-card{
        padding:10px;
    }

    .level-desc{
        max-width:210px;
    }
}
</style>
</head>

<body>

<aside class="sidebar">

    {{-- BRAND --}}
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


    {{-- PROFIL USER --}}
    @auth

        <a href="{{ route('profil') }}" class="user-box">

            <div class="user-avatar">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>

            <div class="user-info">

                <div class="user-name">
                    {{ Auth::user()->name }}
                </div>

                <span class="user-role">
                    Siswa SuraSunda
                </span>

            </div>

        </a>

    @endauth


    {{-- MENU --}}
    <nav class="nav">

        <a href="{{ route('dashboard') }}">
            <span class="nav-icon">▦</span>
            Dashboard
        </a>

        <a
            href="{{ route('materi.index') }}"
            class="active"
        >
            <span class="nav-icon">▥</span>
            Jalur Belajar
        </a>

        <a href="{{ route('latihan') }}">
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


    {{-- LOGOUT --}}
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
                    ↪ Keluar / Logout
                </button>

            </form>

        </div>
    @endauth

</aside>


<main class="main">

    <div class="topbar">
        Sura Sunda
    </div>


    <div class="mobile-head">

        <b style="color:#16863f">
            SuraSunda
        </b>

        <a href="{{ route('dashboard') }}">
            Dashboard
        </a>

    </div>


    <div class="content">


        {{-- HERO --}}
        <section class="hero">

            <span class="pill">
                ◉ Kurikulum SuraSunda
            </span>

            <h1>
                Jalur Belajar Bahasa Sunda
            </h1>

            <p class="muted">
                Pilih modul pembelajaran di bawah untuk mulai belajar.
                Kamu bebas membuka materi dan kuis yang ingin dipelajari.
            </p>

        </section>


        {{-- DATA UNIT --}}
        @php

            $units = [

                [
                    'no' => 1,
                    'title' => 'UNIT 1: Materi Pemula',
                    'subtitle' => 'Dasar Bahasa Sunda, kosakata, salam, dan percakapan',
                    'items' => $pemula,
                    'done' => $selesaiPemula,
                    'total' => $totalPemula,
                    'progress' => $progressPemula,
                    'quiz' => 'easy'
                ],

                [
                    'no' => 2,
                    'title' => 'UNIT 2: Materi Menengah',
                    'subtitle' => 'Kalimat sehari-hari dan pemahaman Bahasa Sunda',
                    'items' => $menengah,
                    'done' => $selesaiMenengah,
                    'total' => $totalMenengah,
                    'progress' => $progressMenengah,
                    'quiz' => 'medium'
                ],

                [
                    'no' => 3,
                    'title' => 'UNIT 3: Materi Lanjutan',
                    'subtitle' => 'Materi Bahasa Sunda tingkat lanjutan',
                    'items' => $lanjutan,
                    'done' => $selesaiLanjutan,
                    'total' => $totalLanjutan,
                    'progress' => $progressLanjutan,
                    'quiz' => 'hard'
                ],

            ];

        @endphp


        {{-- UNIT --}}
        @foreach($units as $unit)

            <section class="unit">

                <div class="unit-head">

                    <div class="unit-no">
                        {{ $unit['no'] }}
                    </div>


                    <div class="unit-info">

                        <div class="unit-title">
                            {{ $unit['title'] }}
                        </div>

                        <div class="muted">
                            {{ $unit['subtitle'] }}
                        </div>

                    </div>


                    <div class="unit-progress">

                        <b>
                            {{ $unit['progress'] }}% Selesai
                        </b>

                        <div class="mini-track">

                            <div
                                class="mini-fill"
                                style="width:{{ $unit['progress'] }}%"
                            ></div>

                        </div>

                    </div>

                </div>


                <div class="levels">


                    {{-- MATERI --}}
                    @forelse($unit['items'] as $index => $material)

                        @php

                            $isCompleted = in_array(
                                $material->id,
                                $completedMaterialIds
                            );

                        @endphp


                        <div class="level-row">

                            <div class="level-icon">

                                {{ $isCompleted ? '✓' : '▶' }}

                            </div>


                            <a
                                class="level-card {{ $isCompleted ? 'done' : '' }}"
                                href="{{ route('materi.show', $material->id) }}"
                            >

                                <div>

                                    <div class="level-name">

                                        Level {{ $index + 1 }}
                                        –
                                        {{ $material->title }}

                                    </div>

                                    <div class="level-desc">

                                        {{ $material->description }}

                                    </div>

                                </div>


                                <span class="xp">

                                    +{{ 10 + ($index * 5) }} XP

                                </span>

                            </a>

                        </div>


                    @empty

                        <div
                            class="muted"
                            style="margin-bottom:15px"
                        >
                            Materi pada unit ini belum tersedia.
                        </div>

                    @endforelse


                    {{-- QUIZ --}}
                    <div class="level-row quiz-row">

                        <div class="level-icon">
                            ?
                        </div>


                        <a
                            class="level-card"
                            href="{{ route('quiz.show', $unit['quiz']) }}"
                        >

                            <div>

                                <div class="level-name">

                                    Kuis Evaluasi
                                    {{ $unit['title'] }}

                                </div>

                                <div class="level-desc">

                                    10 soal kuis • Nilai maksimum 100

                                </div>

                            </div>


                            <span class="xp">
                                +30 XP
                            </span>

                        </a>

                    </div>

                </div>

            </section>

        @endforeach

    </div>

</main>

</body>
</html>