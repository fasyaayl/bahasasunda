@extends('admin.layouts.app')

@section('title', 'Edit Soal')

@section('page-title', 'Edit Soal')

@section('content')

<div class="card card-dashboard">

    <div class="card-header">
        <h5 class="mb-0">Edit Soal Quiz</h5>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.questions.update', $question) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Level</label>

                <select name="difficulty" class="form-select" required>
                    <option value="easy"
                        {{ old('difficulty', $question->difficulty) == 'easy' ? 'selected' : '' }}>
                        Easy
                    </option>

                    <option value="medium"
                        {{ old('difficulty', $question->difficulty) == 'medium' ? 'selected' : '' }}>
                        Medium
                    </option>

                    <option value="hard"
                        {{ old('difficulty', $question->difficulty) == 'hard' ? 'selected' : '' }}>
                        Hard
                    </option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Pertanyaan</label>
                <textarea name="question"
                          class="form-control"
                          rows="3"
                          required>{{ old('question', $question->question) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Pilihan A</label>
                <input type="text"
                       name="option_a"
                       class="form-control"
                       value="{{ old('option_a', $question->option_a) }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Pilihan B</label>
                <input type="text"
                       name="option_b"
                       class="form-control"
                       value="{{ old('option_b', $question->option_b) }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Pilihan C</label>
                <input type="text"
                       name="option_c"
                       class="form-control"
                       value="{{ old('option_c', $question->option_c) }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Pilihan D</label>
                <input type="text"
                       name="option_d"
                       class="form-control"
                       value="{{ old('option_d', $question->option_d) }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jawaban Benar</label>

                <select name="correct_answer" class="form-select" required>
                    @foreach(['A', 'B', 'C', 'D'] as $answer)
                        <option value="{{ $answer }}"
                            {{ old('correct_answer', $question->correct_answer) == $answer ? 'selected' : '' }}>
                            {{ $answer }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Penjelasan</label>
                <textarea name="explanation"
                          class="form-control"
                          rows="3">{{ old('explanation', $question->explanation) }}</textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit"
                        class="btn-admin btn-admin-primary">
                    Simpan Perubahan
                </button>

                <a href="{{ route('admin.questions.index') }}"
                   class="btn-admin btn-admin-secondary">
                    Kembali
                </a>
            </div>

        </form>

    </div>

</div>

@endsection