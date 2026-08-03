<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Latihan {{ ucfirst($difficulty) }} - SuraSunda</title>

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

        /* =========================================================
           SIDEBAR
        ========================================================= */

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
            z-index: 20;
        }

        .brand {
            padding: 24px 20px;
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
        }

        .brand-name {
            font-size: 20px;
            color: #16763d;
            font-weight: 700;
        }

        .brand-sub {
            font-size: 10px;
            color: #888;
        }

        /* =========================================================
           NAVIGATION
        ========================================================= */

        .nav {
            padding: 18px 12px;
        }

        .nav a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            margin-bottom: 5px;
            border-radius: 9px;
            font-size: 13px;
            transition: 0.15s;
        }

        .nav a:hover,
        .nav a.active {
            background: #178844;
            color: #fff;
        }

        .nav-icon {
            width: 20px;
            text-align: center;
        }

        .side-bottom {
            margin-top: auto;
            padding: 16px 14px;
            border-top: 1px solid #eee8df;
        }

        .logout {
            border: 0;
            background: none;
            color: #c53d32;
            cursor: pointer;
            font: inherit;
            font-size: 13px;
        }

        /* =========================================================
           MAIN
        ========================================================= */

        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        .topbar {
            height: 54px;
            background: #fff;
            border-bottom: 1px solid #e7e2da;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
        }

        .wrap {
            max-width: 760px;
            margin: 0 auto;
            padding: 34px 24px;
        }

        /* =========================================================
           QUIZ HEADER
        ========================================================= */

        .quiz-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            font-size: 12px;
        }

        .back {
            color: #555;
        }

        .back:hover {
            color: #16863f;
        }

        .badge {
            padding: 6px 11px;
            border-radius: 5px;
            background: #fff3c9;
            border: 1px solid #ebce67;
            color: #8b6500;
            font-size: 11px;
            font-weight: 600;
        }

        /* =========================================================
           CARD QUIZ
        ========================================================= */

        .card {
            background: #fff;
            border: 1px solid #ded8ce;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,.02);
        }

        /* =========================================================
           PROGRESS
        ========================================================= */

        .progress-head {
            display: flex;
            justify-content: space-between;
            font-size: 11px;
            margin-bottom: 9px;
        }

        .percent {
            color: #16863f;
            font-weight: 700;
        }

        .track {
            height: 8px;
            background: #ece8e0;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 27px;
        }

        .fill {
            height: 100%;
            background: #16863f;
            border-radius: 20px;
            transition: width .25s ease;
        }

        /* =========================================================
           QUESTION
        ========================================================= */

        .question-item {
            display: none;
        }

        .question-item.active {
            display: block;
        }

        .question-box {
            padding: 18px 16px;
            background: #faf8f4;
            border: 1px solid #ded8ce;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 22px;
        }

        /* =========================================================
           OPTION
        ========================================================= */

        .option {
            display: flex;
            align-items: center;
            gap: 13px;
            border: 1px solid #ddd7ce;
            border-radius: 9px;
            padding: 13px 14px;
            margin-bottom: 10px;
            cursor: pointer;
            font-size: 12px;
            transition: .15s;
        }

        .option:hover {
            border-color: #16863f;
            background: #f7fbf8;
        }

        .option.selected {
            border-color: #16863f;
            background: #f1f8f3;
        }

        .option input {
            display: none;
        }

        .letter {
            width: 26px;
            height: 26px;
            border-radius: 6px;
            background: #eee9e1;
            display: grid;
            place-items: center;
            font-weight: 700;
            color: #6d6962;
            flex: 0 0 auto;
        }

        .option.selected .letter {
            background: #16863f;
            color: #fff;
        }

        /* =========================================================
           BUTTON
        ========================================================= */

        .nav-buttons {
            border-top: 1px solid #eee8df;
            margin-top: 24px;
            padding-top: 18px;
            display: flex;
            justify-content: space-between;
        }

        button {
            font-family: inherit;
        }

        .prev,
        .next {
            border-radius: 9px;
            padding: 10px 18px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
        }

        .prev {
            border: 1px solid #ded8ce;
            background: #fff;
            color: #777;
        }

        .prev:hover {
            background: #f8f7f4;
        }

        .next {
            border: 0;
            background: #16863f;
            color: #fff;
        }

        .next:hover {
            background: #126f34;
        }

        .next:disabled,
        .prev:disabled {
            opacity: .6;
            cursor: not-allowed;
        }

        /* =========================================================
           WARNING
        ========================================================= */

        .warning {
            padding: 18px;
            border-radius: 10px;
            background: #fff8db;
            border: 1px solid #eadb83;
            font-size: 13px;
        }

        .mobile-head {
            display: none;
        }

        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media(max-width:760px) {

            .sidebar {
                display: none;
            }

            .main {
                margin-left: 0;
            }

            .topbar {
                display: none;
            }

            .mobile-head {
                display: flex;
                padding: 15px 18px;
                background: #fff;
                border-bottom: 1px solid #e7e2da;
                justify-content: space-between;
            }

            .wrap {
                padding: 22px 14px;
            }

            .card {
                padding: 20px 16px;
            }

            .question-box {
                font-size: 14px;
            }

            .quiz-top {
                gap: 10px;
            }

            .badge {
                max-width: 55%;
                text-align: right;
            }
        }
    </style>
</head>

<body>

{{-- =========================================================
     SIDEBAR
========================================================= --}}

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


    <nav class="nav">

        <a href="{{ route('dashboard') }}">
            <span class="nav-icon">▦</span>
            Dashboard
        </a>

        <a href="{{ route('materi.index') }}">
            <span class="nav-icon">▥</span>
            Jalur Belajar
        </a>

        <a
            href="{{ route('latihan') }}"
            class="active"
        >
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

</aside>


{{-- =========================================================
     MAIN
========================================================= --}}

<main class="main">

    <div class="topbar">
        Sura Sunda
    </div>


    <div class="mobile-head">

        <b style="color:#16863f">
            SuraSunda
        </b>

        <a href="{{ route('materi.index') }}">
            Jalur Belajar
        </a>

    </div>


    <div class="wrap">

        {{-- HEADER --}}

        <div class="quiz-top">

            <a
                class="back"
                href="{{ route('materi.index') }}"
            >
                ← &nbsp; Kembali ke Jalur Belajar
            </a>


            <span class="badge">
                Kuis {{ strtoupper($difficulty) }}
            </span>

        </div>


        {{-- CARD --}}

        <div class="card">

            @if ($questions->count() !== 10)

                <div class="warning">

                    <b>
                        Latihan belum tersedia.
                    </b>

                    <br><br>

                    Soal untuk tingkat
                    {{ ucfirst($difficulty) }}
                    belum berjumlah 10 soal.

                </div>

            @else

                {{-- PROGRESS --}}

                <div class="progress-head">

                    <span>
                        Soal
                        <b id="currentNumber">1</b>
                        dari
                        {{ $questions->count() }}
                    </span>

                    <span
                        class="percent"
                        id="percent"
                    >
                        10%
                    </span>

                </div>


                <div class="track">

                    <div
                        class="fill"
                        id="progressBar"
                        style="width:10%"
                    ></div>

                </div>


                {{-- FORM QUIZ --}}

                <form
                    id="quizForm"
                    action="{{ route('quiz.submit', $difficulty) }}"
                    method="POST"
                >

                    @csrf


                    {{-- ID SOAL --}}

                    @foreach ($questions as $question)

                        <input
                            type="hidden"
                            name="question_ids[]"
                            value="{{ $question->id }}"
                        >

                    @endforeach


                    {{-- SOAL --}}

                    @foreach ($questions as $index => $question)

                        <div
                            class="question-item {{ $index === 0 ? 'active' : '' }}"
                            data-index="{{ $index }}"
                        >

                            <div class="question-box">

                                {{ $index + 1 }}.
                                {{ $question->question }}

                            </div>


                            {{-- PILIHAN A - D --}}

                            @foreach (['a','b','c','d'] as $letter)

                                <label class="option">

                                    <input
                                        type="radio"
                                        name="answers[{{ $question->id }}]"
                                        value="{{ $letter }}"
                                    >

                                    <span class="letter">
                                        {{ strtoupper($letter) }}
                                    </span>

                                    <span>
                                        {{ $question->{'option_'.$letter} }}
                                    </span>

                                </label>

                            @endforeach

                        </div>

                    @endforeach


                    {{-- NAVIGASI --}}

                    <div class="nav-buttons">

                        <button
                            type="button"
                            id="previousButton"
                            class="prev"
                        >
                            ← Sebelumnya
                        </button>


                        <button
                            type="button"
                            id="nextButton"
                            class="next"
                        >
                            Lanjut →
                        </button>

                    </div>

                </form>

            @endif

        </div>

    </div>

</main>


{{-- =========================================================
     JAVASCRIPT
========================================================= --}}

@if ($questions->count() === 10)

<script>

    /*
    |--------------------------------------------------------------------------
    | ELEMENT
    |--------------------------------------------------------------------------
    */

    const questions =
        [...document.querySelectorAll('.question-item')];

    const next =
        document.getElementById('nextButton');

    const prev =
        document.getElementById('previousButton');

    const num =
        document.getElementById('currentNumber');

    const bar =
        document.getElementById('progressBar');

    const percent =
        document.getElementById('percent');

    const form =
        document.getElementById('quizForm');


    let current = 0;

    let submitting = false;


    /*
    |--------------------------------------------------------------------------
    | UPDATE TAMPILAN
    |--------------------------------------------------------------------------
    */

    function render() {

        questions.forEach(
            (question, index) => {

                question.classList.toggle(
                    'active',
                    index === current
                );

            }
        );


        const progress =
            Math.round(
                ((current + 1) / questions.length) * 100
            );


        num.textContent =
            current + 1;


        bar.style.width =
            progress + '%';


        percent.textContent =
            progress + '%';


        /*
        | Tombol sebelumnya
        */

        prev.style.visibility =
            current === 0
                ? 'hidden'
                : 'visible';


        /*
        | Tombol terakhir
        */

        if (
            current ===
            questions.length - 1
        ) {

            next.textContent =
                'Selesaikan Latihan';

        } else {

            next.textContent =
                'Lanjut →';

        }

    }


    /*
    |--------------------------------------------------------------------------
    | PILIH JAWABAN
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('.option input')
        .forEach(function (radio) {

            radio.addEventListener(
                'change',
                function () {

                    /*
                    | Hilangkan selected dari pilihan lain
                    */

                    document
                        .querySelectorAll(
                            `input[name="${this.name}"]`
                        )
                        .forEach(function (input) {

                            input
                                .closest('.option')
                                .classList
                                .remove('selected');

                        });


                    /*
                    | Tandai pilihan aktif
                    */

                    this
                        .closest('.option')
                        .classList
                        .add('selected');

                }
            );

        });


    /*
    |--------------------------------------------------------------------------
    | SEBELUMNYA
    |--------------------------------------------------------------------------
    */

    prev.addEventListener(
        'click',
        function () {

            if (submitting) {
                return;
            }


            if (current > 0) {

                current--;

                render();

                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });

            }

        }
    );


    /*
    |--------------------------------------------------------------------------
    | LANJUT / SELESAIKAN
    |--------------------------------------------------------------------------
    */

    next.addEventListener(
        'click',
        function () {

            if (submitting) {
                return;
            }


            /*
            |--------------------------------------------------------------------------
            | CEK JAWABAN SOAL AKTIF
            |--------------------------------------------------------------------------
            */

            const selected =
                questions[current]
                    .querySelector(
                        'input[type="radio"]:checked'
                    );


            if (!selected) {

                alert(
                    'Pilih salah satu jawaban terlebih dahulu.'
                );

                return;

            }


            /*
            |--------------------------------------------------------------------------
            | JIKA BELUM SOAL TERAKHIR
            |--------------------------------------------------------------------------
            */

            if (
                current <
                questions.length - 1
            ) {

                current++;

                render();

                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });

                return;

            }


            /*
            |--------------------------------------------------------------------------
            | CEK SEMUA SOAL SUDAH DIJAWAB
            |--------------------------------------------------------------------------
            */

            const totalAnswered =
                document.querySelectorAll(
                    '.question-item input[type="radio"]:checked'
                ).length;


            if (
                totalAnswered !==
                questions.length
            ) {

                alert(
                    'Masih ada soal yang belum dijawab.'
                );

                return;

            }


            /*
            |--------------------------------------------------------------------------
            | LANGSUNG SUBMIT
            |--------------------------------------------------------------------------
            |
            | Tidak menggunakan confirm().
            |
            | Jadi:
            | Soal 10
            | ↓
            | Klik Selesaikan Latihan
            | ↓
            | Langsung submit
            | ↓
            | QuizResultController menghitung nilai
            | ↓
            | quiz-result.blade.php ditampilkan
            |
            */


            submitting = true;


            next.disabled = true;

            prev.disabled = true;


            next.textContent =
                'Memproses...';


            /*
            | LANGSUNG KIRIM
            */

            form.submit();

        }
    );


    /*
    |--------------------------------------------------------------------------
    | TAMPILAN AWAL
    |--------------------------------------------------------------------------
    */

    render();

</script>

@endif

</body>
</html>