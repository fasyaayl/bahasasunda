@extends('admin.layouts.app')

@section('title', 'Data Siswa')

@section('page-title', 'Data Siswa')

@section('content')

<div class="card card-dashboard">

    <div class="card-header">

        <h5 class="mb-0">
            Daftar Siswa
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
                            Nama
                        </th>

                        <th>
                            Email
                        </th>

                        <th width="120">
                            Role
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($students as $student)

                    <tr>

                        <td>
                            {{ $student->id }}
                        </td>


                        <td class="student-name">

                            <strong>
                                {{ $student->name }}
                            </strong>

                        </td>


                        <td class="student-email">

                            {{ $student->email }}

                        </td>


                        <td>

                            @if($student->role === 'student')

                                <span class="badge bg-success">
                                    Siswa
                                </span>

                            @elseif($student->role === 'teacher')

                                <span class="badge bg-primary">
                                    Guru
                                </span>

                            @else

                                <span class="badge bg-secondary">
                                    {{ ucfirst($student->role) }}
                                </span>

                            @endif

                        </td>

                    </tr>


                    @empty

                    <tr>

                        <td
                            colspan="4"
                            class="text-center py-4"
                        >

                            Belum ada data siswa.

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
   TABLE
========================= */

.student-name {
    min-width: 180px;
}

.student-email {
    min-width: 240px;
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


    .table {
        min-width: 650px;
        font-size: 12px;
    }


    .table th,
    .table td {
        padding: 10px 8px;
        white-space: nowrap;
    }


    .student-name {
        min-width: 180px;
    }


    .student-email {
        min-width: 250px;
    }

}

</style>

@endsection