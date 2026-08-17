@extends('admin.layouts.app')

@section('title', 'Tambah Soal')

@section('page-title', 'Tambah Soal')

@section('content')

<div class="card card-dashboard">

    <div class="card-header">
        <h5>Tambah Soal Baru</h5>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.questions.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Level</label>

                <select class="form-select" name="difficulty" required>
                    <option value="">-- Pilih Level --</option>
                    <option value="easy">Easy</option>
                    <option value="medium">Medium</option>
                    <option value="hard">Hard</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Pertanyaan</label>
                <textarea class="form-control" name="question" rows="3" required></textarea>
            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label>Pilihan A</label>
                    <input type="text" class="form-control" name="option_a" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Pilihan B</label>
                    <input type="text" class="form-control" name="option_b" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Pilihan C</label>
                    <input type="text" class="form-control" name="option_c" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Pilihan D</label>
                    <input type="text" class="form-control" name="option_d" required>
                </div>

            </div>

            <div class="mb-3">
                <label>Jawaban Benar</label>

                <select class="form-select" name="correct_answer" required>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>

            </div>

            <div class="mb-3">
                <label>Penjelasan</label>

                <textarea class="form-control"
                          name="explanation"
                          rows="4"></textarea>

            </div>

            <button class="btn btn-success">
                Simpan Soal
            </button>

            <a href="{{ route('admin.questions.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>

@endsection