<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $material->title }} - SuraSunda</title>

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
            color: #212529;
        }

        .navbar-brand {
            color: #198754;
            font-weight: 700;
            font-size: 22px;
            text-decoration: none;
        }

        .material-container {
            max-width: 850px;
            margin: 45px auto;
            padding: 0 20px;
        }

        .material-card {
            background: white;
            border: 1px solid #e8eee8;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.05);
        }

        .category {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .pemula {
            background: #eaf7ef;
            color: #198754;
        }

        .menengah {
            background: #fff4d6;
            color: #b77900;
        }

        .lanjutan {
            background: #fdecec;
            color: #dc3545;
        }

        .completed-badge {
            display: inline-block;
            background: #198754;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
        }

        .material-content {
            margin-top: 30px;
            line-height: 1.8;
            font-size: 16px;
        }

        .material-content h4 {
            font-weight: 700;
            margin-top: 25px;
            margin-bottom: 15px;
        }

        .material-content ul {
            padding-left: 22px;
        }

        .material-content li {
            margin-bottom: 8px;
        }

        .material-content p {
            margin-bottom: 16px;
        }

        .material-content hr {
            border-color: #e8eee8;
            margin: 25px 0;
        }

        .btn-main {
            background: #198754;
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            padding: 11px 20px;
            text-decoration: none;
        }

        .btn-main:hover {
            background: #157347;
            color: white;
        }

        .btn-back {
            color: #6c757d;
            text-decoration: none;
            font-weight: 500;
        }

        .btn-back:hover {
            color: #198754;
        }

        .success-alert {
            background: #eaf7ef;
            color: #146c43;
            border: 1px solid #badbcc;
            border-radius: 12px;
            padding: 14px 18px;
            margin-bottom: 25px;
        }

        .completed-button {
            background: #198754;
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            padding: 11px 20px;
            opacity: 1 !important;
            cursor: default;
        }

        .completed-button:disabled {
            background: #198754;
            color: white;
            opacity: 1;
        }

        .next-info {
            background: #f8faf8;
            border: 1px solid #e8eee8;
            border-radius: 12px;
            padding: 14px 16px;
            margin-top: 25px;
            color: #6c757d;
            font-size: 14px;
        }

        @media (max-width: 576px) {
            .material-card {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<nav class="navbar bg-white border-bottom">

    <div class="container py-2">

        <a
            class="navbar-brand"
            href="{{ route('dashboard') }}"
        >
            SuraSunda
        </a>

        <a
            href="{{ route('dashboard') }}"
            class="btn btn-outline-secondary btn-sm"
        >
            Dashboard
        </a>

    </div>

</nav>


<div class="material-container">

    {{-- KEMBALI --}}
    <div class="mb-4">

        <a
            href="{{ route('materi.index') }}"
            class="btn-back"
        >
            ← Kembali ke Materi
        </a>

    </div>


    {{-- PESAN BERHASIL --}}
    @if (session('success'))

        <div class="success-alert">
            ✓ {{ session('success') }}
        </div>

    @endif


    {{-- CARD MATERI --}}
    <div class="material-card">

        {{-- HEADER --}}
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

            <div>

                @if ($material->category === 'pemula')

                    <span class="category pemula">
                        Pemula
                    </span>

                @elseif ($material->category === 'menengah')

                    <span class="category menengah">
                        Menengah
                    </span>

                @else

                    <span class="category lanjutan">
                        Lanjutan
                    </span>

                @endif

            </div>


            @if ($isCompleted)

                <span class="completed-badge">
                    ✓ Sudah Dipelajari
                </span>

            @endif

        </div>


        {{-- JUDUL --}}
        <h1 class="fw-bold mt-3 mb-3">
            {{ $material->title }}
        </h1>


        {{-- DESKRIPSI --}}
        @if ($material->description)

            <p class="text-secondary">
                {{ $material->description }}
            </p>

        @endif


        <hr>


        {{-- ISI MATERI --}}
        <div class="material-content">
            {!! $material->content !!}
        </div>


        {{-- INFORMASI SETELAH MATERI SELESAI --}}
        @if ($isCompleted)

            <div class="next-info">

                <strong class="text-success">
                    ✓ Materi ini sudah selesai.
                </strong>

                <div class="mt-1">
                    Kamu bisa kembali ke daftar materi untuk melanjutkan materi berikutnya,
                    atau masuk ke halaman latihan untuk melihat level yang sudah terbuka.
                </div>

            </div>

        @endif


        <hr class="mt-5">


        {{-- TOMBOL --}}
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

            <a
                href="{{ route('materi.index') }}"
                class="btn btn-outline-secondary"
            >
                ← Kembali ke Daftar Materi
            </a>


            <div class="d-flex gap-2 flex-wrap">

                {{-- STATUS MATERI --}}
                @if ($isCompleted)

                    <button
                        type="button"
                        class="completed-button"
                        disabled
                    >
                        ✓ Materi Sudah Dipelajari
                    </button>

                @else

                    <form
                        action="{{ route('materi.complete', $material->id) }}"
                        method="POST"
                    >
                        @csrf

                        <button
                            type="submit"
                            class="btn btn-outline-success"
                        >
                            ✓ Tandai Sudah Dipelajari
                        </button>

                    </form>

                @endif


                {{-- LATIHAN --}}
                @if ($isCompleted)

                    <a
                        href="{{ route('latihan') }}"
                        class="btn btn-main"
                    >
                        Lanjut ke Latihan →
                    </a>

                @endif

            </div>

        </div>

    </div>

</div>

</body>
</html>