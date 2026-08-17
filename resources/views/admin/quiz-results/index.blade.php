@extends('admin.layouts.app')

@section('title', 'Hasil Kuis')

@section('page-title', 'Hasil Kuis')

@section('content')

<div class="card card-dashboard">

    <div class="card-header">

        <h5 class="mb-0">
            Daftar Hasil Kuis
        </h5>

    </div>


    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle mb-0">

                <thead class="table-success">

                    <tr>

                        <th width="70">
                            ID
                        </th>

                        <th>
                            Nama Siswa
                        </th>

                        <th width="120">
                            Level
                        </th>

                        <th width="100">
                            Nilai
                        </th>

                        <th width="90">
                            Benar
                        </th>

                        <th width="90">
                            Salah
                        </th>

                        <th width="110">
                            Total Soal
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($quizResults as $result)

                    <tr>

                        <td>
                            {{ $result->id }}
                        </td>


                        <td class="student-name">

                            <strong>
                                {{ $result->user->name ?? '-' }}
                            </strong>

                        </td>


                        <td>

                            @if($result->difficulty === 'easy')

                                <span class="badge bg-success">
                                    Easy
                                </span>

                            @elseif($result->difficulty === 'medium')

                                <span class="badge bg-warning text-dark">
                                    Medium
                                </span>

                            @else

                                <span class="badge bg-danger">
                                    Hard
                                </span>

                            @endif

                        </td>


                        <td>

                            <strong
                                class="{{ $result->score >= 70
                                    ? 'score-pass'
                                    : 'score-fail' }}"
                            >
                                {{ $result->score }}
                            </strong>

                        </td>


                        <td class="text-success fw-semibold">

                            {{ $result->correct }}

                        </td>


                        <td class="text-danger fw-semibold">

                            {{ $result->wrong }}

                        </td>


                        <td>

                            {{ $result->total }}

                        </td>

                    </tr>


                    @empty

                    <tr>

                        <td
                            colspan="7"
                            class="text-center py-4"
                        >

                            Belum ada hasil kuis.

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>


<style>

/* =========================
   NAMA SISWA
========================= */

.student-name {
    min-width: 180px;
}


/* =========================
   NILAI
========================= */

.score-pass {
    color: #16863f;
}

.score-fail {
    color: #dc3545;
}


/* =========================
   TABLET
========================= */

@media (max-width: 991px) {

    .card-header {
        padding: 15px;
    }

    .card-body {
        padding: 15px;
    }

}


/* =========================
   MOBILE
========================= */

@media (max-width: 767px) {

    .card-header {
        padding: 14px;
    }

    .card-header h5 {
        font-size: 17px;
    }

    .card-body {
        padding: 10px;
    }


    .table-responsive {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }


    /*
       Tabel tetap nyaman dibaca.
       Pada layar HP bisa digeser
       ke kiri dan kanan.
    */

    .table {
        min-width: 760px;
        font-size: 12px;
    }


    .table th,
    .table td {
        padding: 10px 8px;
        white-space: nowrap;
    }


    .student-name {
        min-width: 190px;
    }

}


/* =========================
   HP KECIL
========================= */

@media (max-width: 400px) {

    .table {
        font-size: 11px;
    }

}

</style>

@endsection