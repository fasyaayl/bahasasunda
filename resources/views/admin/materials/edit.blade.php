@extends('admin.layouts.app')

@section('content')

<style>
    .material-form {
        background: #fff;
        border-radius: 10px;
        padding: 24px;
        box-shadow: 0 2px 10px rgba(0,0,0,.06);
    }

    .material-form h2 {
        margin: 0 0 24px;
        font-size: 20px;
        color: #1f2937;
    }

    .form-group {
        margin-bottom: 18px;
    }

    .form-group label {
        display: block;
        margin-bottom: 7px;
        font-weight: 600;
        color: #374151;
    }

    .form-control {
        width: 100%;
        box-sizing: border-box;
        padding: 11px 12px;
        border: 1px solid #d1d5db;
        border-radius: 7px;
        font-size: 14px;
        outline: none;
    }

    .form-control:focus {
        border-color: #198754;
    }

    textarea.form-control {
        min-height: 300px;
        resize: vertical;
        font-family: monospace;
        line-height: 1.5;
    }

    .form-actions {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    .btn-save {
        border: none;
        background: #198754;
        color: white;
        padding: 10px 18px;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 600;
    }

    .btn-back {
        text-decoration: none;
        background: #e5e7eb;
        color: #374151;
        padding: 10px 18px;
        border-radius: 6px;
        font-weight: 600;
    }

    .error-box {
        background: #fee2e2;
        color: #991b1b;
        padding: 12px;
        border-radius: 6px;
        margin-bottom: 20px;
    }
</style>

<div class="material-form">

    <h2>Edit Materi</h2>

    @if ($errors->any())
        <div class="error-box">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('admin.materials.update', $material->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Judul Materi</label>

            <input
                type="text"
                name="title"
                class="form-control"
                value="{{ old('title', $material->title) }}"
                required
            >
        </div>

        <div class="form-group">
            <label>Kategori</label>

            <select name="category"
                    class="form-control"
                    required>

                <option value="pemula"
                    {{ old('category', $material->category) == 'pemula' ? 'selected' : '' }}>
                    Pemula
                </option>

                <option value="menengah"
                    {{ old('category', $material->category) == 'menengah' ? 'selected' : '' }}>
                    Menengah
                </option>

                <option value="lanjutan"
                    {{ old('category', $material->category) == 'lanjutan' ? 'selected' : '' }}>
                    Lanjutan
                </option>

            </select>
        </div>

        <div class="form-group">
            <label>Urutan Materi</label>

            <input
                type="number"
                name="order"
                class="form-control"
                value="{{ old('order', $material->order) }}"
                min="1"
                required
            >
        </div>

        <div class="form-group">
            <label>Isi Materi</label>

           <textarea
    name="content"
    class="form-control"
    placeholder="Masukkan isi materi..."
    required
>{{ old('content') }}</textarea>
        </div>

        <div class="form-actions">

            <button type="submit" class="btn-save">
                Simpan Perubahan
            </button>

            <a href="{{ route('admin.materials.index') }}"
               class="btn-back">
                Kembali
            </a>

        </div>

    </form>

</div>

@endsection