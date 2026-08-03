<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hasil Latihan - SuraSunda</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f7faf7;
        }

        .result-container {
            max-width: 850px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .logo {
            color: #198754;
            font-weight: 700;
            text-decoration: none;
            font-size: 22px;
        }

        .result-card {
            background: white;
            border: 1px solid #e5ebe5;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.05);
        }

        .score-circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin: 25px auto;
            border: 8px solid;
        }

        .score-pass {
            background: #eaf7ef;
            border-color: #198754;
        }

        .score-fail {
            background: #fdecec;
            border-color: #dc3545;
        }

        .score-number {
            font-size: 42px;
            font-weight: 700;
            line-height: 1;
        }

        .score-pass .score-number {
            color: #198754;
        }

        .score-fail .score-number {
            color: #dc3545;
        }

        .score-text {
            font-size: 13px;
            color: #6c757d;
            margin-top: 6px;
        }

        .status-badge {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .status-pass {
            background: #eaf7ef;
            color: #198754;
        }

        .status-fail {
            background: #fdecec;
            color: #dc3545;
        }

        .passing-info {
            background: #f8faf8;
            border: 1px solid #e5ebe5;
            border-radius: 12px;
            padding: 12px 16px;
            margin-top: 20px;
            font-size: 14px;
        }

        .stat-card {
            background: #f8faf8;
            border: 1px solid #e5ebe5;
            border-radius: 14px;
            padding: 20px;
            text-align: center;
            height: 100%;
        }

        .stat-number {
            font-size: 25px;
            font-weight: 700;
        }

        .answer-card {
            background: white;
            border: 1px solid #e5ebe5;
            border-radius: 16px;
            padding: 22px;
            margin-bottom: 15px;
        }

        .answer-correct {
            border-left: 5px solid #198754;
        }

        .answer-wrong {
            border-left: 5px solid #dc3545;
        }

        .badge-correct {
            background: #eaf7ef;
            color: #198754;
        }

        .badge-wrong {
            background: #fdecec;
            color: #dc3545;
        }

        .answer-badge {
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
        }

        .explanation {
            background: #f7faf7;
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
            font-size: 14px;
        }

        .btn-main {
            background: #198754;
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            padding: 11px 20px;
        }

        .btn-main:hover {
            background: #157347;
            color: white;
        }

        .btn-secondary-custom {
            background: white;
            color: #198754;
            border: 1px solid #198754;
            border-radius: 10px;
            font-weight: 600;
            padding: 11px 20px;
        }

        .btn-secondary-custom:hover {
            background: #eaf7ef;
            color: #198754;
        }
    </style>
</head>

<body>

<div class="result-container">

    <div class="mb-4">
        <a
            href="{{ route('dashboard') }}"
            class="logo"
        >
            SuraSunda
        </a>
    </div>


    <!-- HASIL -->

    <div class="result-card text-center">

        <p class="text-success fw-semibold mb-2">
            Latihan Selesai
        </p>

        <h2 class="fw-bold">
            Hasil Latihan Kamu
        </h2>

        <p class="text-secondary">
            Tingkat {{ ucfirst($difficulty) }}
        </p>


        <!-- NILAI -->

        <div class="score-circle {{ $isPassed ? 'score-pass' : 'score-fail' }}">

            <div class="score-number">
                {{ $score }}
            </div>

            <div class="score-text">
                dari 100
            </div>

        </div>


        <!-- STATUS LULUS -->

        @if ($isPassed)

            <span class="status-badge status-pass">
                ✓ LULUS
            </span>

            <h5 class="fw-bold text-success">
                Selamat!
            </h5>

            <p class="text-secondary mb-0">
                Kamu berhasil menyelesaikan latihan
                {{ ucfirst($difficulty) }}.
            </p>

        @else

            <span class="status-badge status-fail">
                BELUM LULUS
            </span>

            <h5 class="fw-bold text-danger">
                Tetap Semangat!
            </h5>

            <p class="text-secondary mb-0">
                Pelajari kembali pembahasannya dan coba latihan lagi.
            </p>

        @endif


        <div class="passing-info">

            Nilai minimum kelulusan:

            <strong>
                {{ $passingScore }}
            </strong>

            @if (!$isPassed)

                <br>

                Kamu masih membutuhkan

                <strong class="text-danger">
                    {{ max(0, $passingScore - $score) }}
                </strong>

                poin lagi untuk lulus.

            @endif

        </div>


        <!-- STATISTIK -->

        <div class="row g-3 mt-4">

            <div class="col-md-4">

                <div class="stat-card">

                    <div class="stat-number">
                        {{ $total }}
                    </div>

                    <div class="text-secondary small">
                        Total Soal
                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="stat-card">

                    <div class="stat-number text-success">
                        {{ $correct }}
                    </div>

                    <div class="text-secondary small">
                        Jawaban Benar
                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="stat-card">

                    <div class="stat-number text-danger">
                        {{ $wrong }}
                    </div>

                    <div class="text-secondary small">
                        Jawaban Salah
                    </div>

                </div>

            </div>

        </div>


        <!-- TOMBOL -->

        <div class="d-flex justify-content-center gap-2 flex-wrap mt-4">

            @if (!$isPassed)

                <a
                    href="{{ route('quiz.show', $difficulty) }}"
                    class="btn btn-main"
                >
                    Coba Lagi
                </a>

            @else

                <a
                    href="{{ route('latihan') }}"
                    class="btn btn-main"
                >
                    Lanjutkan
                </a>

            @endif


            <a
                href="{{ route('latihan') }}"
                class="btn btn-secondary-custom"
            >
                Pilih Tingkat
            </a>


            <a
                href="{{ route('dashboard') }}"
                class="btn btn-outline-secondary"
            >
                Dashboard
            </a>

        </div>

    </div>


    <!-- PEMBAHASAN -->

    <div class="mt-5">

        <h3 class="fw-bold mb-2">
            Pembahasan Jawaban
        </h3>

        <p class="text-secondary mb-4">
            Lihat kembali jawaban yang sudah kamu kerjakan.
        </p>


        @foreach ($results as $index => $result)

            <div
                class="answer-card
                {{ $result['is_correct'] ? 'answer-correct' : 'answer-wrong' }}"
            >

                <div class="d-flex justify-content-between align-items-start">

                    <div>

                        <p class="text-secondary small mb-2">
                            Soal {{ $index + 1 }}
                        </p>

                        <h5 class="fw-bold">
                            {{ $result['question']->question }}
                        </h5>

                    </div>


                    @if ($result['is_correct'])

                        <span class="answer-badge badge-correct">
                            Benar
                        </span>

                    @else

                        <span class="answer-badge badge-wrong">
                            Salah
                        </span>

                    @endif

                </div>


                @php

                    $question = $result['question'];

                    $options = [
                        'a' => $question->option_a,
                        'b' => $question->option_b,
                        'c' => $question->option_c,
                        'd' => $question->option_d,
                    ];

                    $userAnswer = $result['user_answer'];

                    $correctAnswer = $question->correct_answer;

                @endphp


                <div class="mt-3">

                    <p class="mb-2">

                        <strong>
                            Jawaban kamu:
                        </strong>

                        @if ($userAnswer)

                            {{ strtoupper($userAnswer) }}.
                            {{ $options[$userAnswer] ?? '-' }}

                        @else

                            Tidak dijawab

                        @endif

                    </p>


                    @if (!$result['is_correct'])

                        <p class="mb-2 text-success">

                            <strong>
                                Jawaban benar:
                            </strong>

                            {{ strtoupper($correctAnswer) }}.
                            {{ $options[$correctAnswer] ?? '-' }}

                        </p>

                    @endif

                </div>


                @if ($question->explanation)

                    <div class="explanation">

                        <strong>
                            Pembahasan:
                        </strong>

                        {{ $question->explanation }}

                    </div>

                @endif

            </div>

        @endforeach

    </div>

</div>

</body>
</html> I need love and affection. I don't wanna give you the wrong impression. I need love