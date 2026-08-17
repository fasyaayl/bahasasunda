@extends('admin.layouts.app')

@section('title', 'Kelola Soal')

@section('page-title', 'Kelola Soal')

@section('content')

@if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif


<div class="card card-dashboard">

    <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">

        <h5 class="mb-0">
            Daftar Soal Quiz
        </h5>


        <a
            href="{{ route('admin.questions.create') }}"
            class="btn-admin btn-admin-primary"
        >
            ＋ Tambah Soal
        </a>

    </div>


    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle mb-0">

                <thead class="table-success">

                    <tr>

                        <th width="70">
                            ID
                        </th>

                        <th width="120">
                            Level
                        </th>

                        <th>
                            Pertanyaan
                        </th>

                        <th width="120">
                            Jawaban
                        </th>

                        <th width="180">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                @forelse($questions as $question)

                    <tr>

                        <td>
                            {{ $question->id }}
                        </td>


                        <td>

                            @if($question->difficulty == 'easy')

                                <span class="badge bg-success">
                                    Easy
                                </span>

                            @elseif($question->difficulty == 'medium')

                                <span class="badge bg-warning text-dark">
                                    Medium
                                </span>

                            @else

                                <span class="badge bg-danger">
                                    Hard
                                </span>

                            @endif

                        </td>


                        <td class="question-cell">

                            {{ $question->question }}

                        </td>


                        <td>

                            <strong>
                                {{ strtoupper($question->correct_answer) }}
                            </strong>

                        </td>


                        <td>

                            <div class="admin-action-buttons">

                                <a
                                    href="{{ route('admin.questions.edit', $question) }}"
                                    class="btn-admin btn-admin-edit"
                                >
                                    Edit
                                </a>


                                <form
                                    action="{{ route('admin.questions.destroy', $question) }}"
                                    method="POST"
                                    class="delete-form"
                                >

                                    @csrf

                                    @method('DELETE')


                                    <button
                                        type="submit"
                                        class="btn-admin btn-admin-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus soal ini?')"
                                    >
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>


                @empty

                    <tr>

                        <td
                            colspan="5"
                            class="text-center py-4"
                        >
                            Belum ada soal.
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
   TOMBOL AKSI
========================= */

.admin-action-buttons {
    display: flex;
    align-items: center;
    gap: 6px;
    flex-wrap: wrap;
}

.delete-form {
    display: inline-block;
    margin: 0;
}


/* =========================
   PERTANYAAN
========================= */

.question-cell {
    min-width: 300px;
    line-height: 1.6;
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

    .question-cell {
        min-width: 280px;
    }

}


/* =========================
   MOBILE
========================= */

@media (max-width: 767px) {

    .card-header {
        align-items: stretch !important;
    }

    .card-header h5 {
        font-size: 17px;
    }

    .card-header .btn-admin-primary {
        width: 100%;
    }

    .card-body {
        padding: 10px;
    }


    /*
       Tabel dapat digeser horizontal
       jika layar HP tidak cukup.
    */

    .table-responsive {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }


    .table {
        min-width: 750px;
        font-size: 12px;
    }


    .table th,
    .table td {
        padding: 10px 8px;
        white-space: nowrap;
    }


    .question-cell {
        min-width: 350px;
        max-width: 450px;

        white-space: normal !important;

        line-height: 1.5;
    }


    .admin-action-buttons {
        flex-wrap: nowrap;
    }


    .btn-admin {
        white-space: nowrap;
    }

}


/* =========================
   HP KECIL
========================= */

@media (max-width: 400px) {

    .card-header h5 {
        font-size: 16px;
    }

    .table {
        font-size: 11px;
    }

}

</style>

@endsection