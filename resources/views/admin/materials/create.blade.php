@extends('admin.layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Tambah Materi</h3>
    </div>

    <div class="card-body">

        @if ($errors->any())
            <div style="background:#f8d7da; padding:10px; margin-bottom:15px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.materials.store') }}" method="POST">
            @csrf

            <div style="margin-bottom:15px;">
                <label>Judul Materi</label>
                <input
                    type="text"
                    name="title"
                    value="{{ old('title') }}"
                    required
                    style="width:100%; padding:8px;"
                >
            </div>

            <div style="margin-bottom:15px;">
                <label>Kategori</label>
                <select
                    name="category"
                    required
                    style="width:100%; padding:8px;"
                >
                    <option value="">-- Pilih Kategori --</option>
                    <option value="pemula">Pemula</option>
                    <option value="menengah">Menengah</option>
                    <option value="lanjutan">Lanjutan</option>
                </select>
            </div>

            <div style="margin-bottom:15px;">
                <label>Urutan</label>
                <input
                    type="number"
                    name="order"
                    value="{{ old('order') }}"
                    min="1"
                    required
                    style="width:100%; padding:8px;"
                >
            </div>

            <div style="margin-bottom:15px;">
                <label>Isi Materi</label>
                <textarea
                    name="content"
                    rows="10"
                    required
                    style="width:100%; padding:8px;"
                >{{ old('content') }}</textarea>
            </div>

            <div style="display:flex; gap:10px; margin-top:20px;">

    <button type="submit"
        style="
            background:#198754;
            color:white;
            border:none;
            padding:10px 20px;
            border-radius:6px;
            font-size:14px;
            font-weight:500;
            cursor:pointer;
        ">
        Simpan Materi
    </button>

    <a href="{{ route('admin.materials.index') }}"
        style="
            background:#6c757d;
            color:white;
            padding:10px 20px;
            border-radius:6px;
            font-size:14px;
            font-weight:500;
            text-decoration:none;
            display:inline-flex;
            align-items:center;
        ">
        Kembali
    </a>

</div>
        </form>

    </div>
</div>

@endsection