@extends('admin.layouts.app')

@section('title', 'Kelola Materi')

@section('page-title', 'Kelola Materi')

@section('content')

@if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif


<div class="card card-dashboard">

    <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">

        <h5 class="mb-0">
            Daftar Materi
        </h5>


        <a
            href="{{ route('admin.materials.create') }}"
            class="btn-admin btn-admin-primary"
        >
            ＋ Tambah Materi
        </a>

    </div>


    <div class="card-body">

        {{-- TABLE WRAPPER RESPONSIVE --}}

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle mb-0">

                <thead class="table-success">

                    <tr>

                        <th width="60">
                            ID
                        </th>

                        <th>
                            Judul Materi
                        </th>

                        <th>
                            Kategori
                        </th>

                        <th width="100">
                            Urutan
                        </th>

                        <th width="180">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($materials as $material)

                    <tr>

                        <td>
                            {{ $material->id }}
                        </td>


                        <td>
                            <strong>
                                {{ $material->title }}
                            </strong>
                        </td>


                        <td>

                            @if($material->category === 'pemula')

                                <span class="badge bg-success">
                                    Pemula
                                </span>

                            @elseif($material->category === 'menengah')

                                <span class="badge bg-warning text-dark">
                                    Menengah
                                </span>

                            @else

                                <span class="badge bg-danger">
                                    Lanjutan
                                </span>

                            @endif

                        </td>


                        <td>
                            {{ $material->order }}
                        </td>


                        <td>

                            <div class="admin-action-buttons">

                                <a
                                    href="{{ route('admin.materials.edit', $material) }}"
                                    class="btn-admin btn-admin-edit"
                                >
                                    Edit
                                </a>


                                <form
                                    action="{{ route('admin.materials.destroy', $material) }}"
                                    method="POST"
                                    class="delete-form"
                                >

                                    @csrf

                                    @method('DELETE')


                                    <button
                                        type="submit"
                                        class="btn-admin btn-admin-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus materi ini?')"
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
                            Belum ada materi.
                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>


<style>

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
       Tabel tetap memiliki ukuran minimum
       dan bisa digeser horizontal.
    */

    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table {
        min-width: 700px;
        font-size: 12px;
    }

    .table th,
    .table td {
        white-space: nowrap;
        padding: 10px 8px;
    }

    .admin-action-buttons {
        flex-wrap: nowrap;
    }

    .btn-admin {
        white-space: nowrap;
    }

}

</style>

@endsection