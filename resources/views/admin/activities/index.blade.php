@extends('admin.layouts.app')

@section('title', 'Aktivitas Siswa')

@section('page-title', 'Aktivitas Siswa')

@section('content')

<div class="card card-dashboard">

    <div class="card-header">

        <h5 class="mb-0">
            Riwayat Aktivitas Siswa
        </h5>

    </div>


    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle mb-0">

                <thead class="table-success">

                    <tr>

                        <th width="70">
                            No
                        </th>

                        <th>
                            Nama Siswa
                        </th>

                        <th>
                            Aktivitas
                        </th>

                        <th>
                            Deskripsi
                        </th>

                        <th>
                            IP Address
                        </th>

                        <th>
                            Waktu
                        </th>

                    </tr>

                </thead>


                <tbody>

                @forelse($activities as $activity)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>


                        <td class="student-name">

                            <strong>
                                {{ $activity->user->name ?? '-' }}
                            </strong>

                        </td>


                        <td>

                            @switch($activity->activity)

                                @case('login')

                                    <span class="badge bg-success">
                                        Login
                                    </span>

                                    @break


                                @case('logout')

                                    <span class="badge bg-danger">
                                        Logout
                                    </span>

                                    @break


                                @case('material_open')

                                    <span class="badge bg-primary">
                                        Membuka Materi
                                    </span>

                                    @break


                                @case('material_finish')

                                    <span class="badge bg-warning text-dark">
                                        Selesai Materi
                                    </span>

                                    @break


                                @case('quiz_start')

                                    <span class="badge bg-info text-dark">
                                        Mulai Quiz
                                    </span>

                                    @break


                                @case('quiz_finish')

                                    <span class="badge bg-dark">
                                        Selesai Quiz
                                    </span>

                                    @break


                                @default

                                    <span class="badge bg-secondary">
                                        {{ $activity->activity }}
                                    </span>

                            @endswitch

                        </td>


                        <td class="activity-description">

                            {{ $activity->description }}

                        </td>


                        <td class="ip-address">

                            {{ $activity->ip_address ?? '-' }}

                        </td>


                        <td class="activity-time">

                            {{ $activity->created_at->format('d-m-Y H:i:s') }}

                        </td>

                    </tr>


                @empty

                    <tr>

                        <td
                            colspan="6"
                            class="text-center py-4"
                        >

                            Belum ada aktivitas siswa.

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
   KOLOM
========================= */

.student-name {
    min-width: 170px;
}

.activity-description {
    min-width: 250px;
    line-height: 1.5;
}

.ip-address {
    min-width: 130px;
}

.activity-time {
    min-width: 160px;
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


    /*
       Tabel dapat digeser kiri-kanan
       pada layar HP.
    */

    .table-responsive {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }


    .table {
        min-width: 950px;
        font-size: 12px;
    }


    .table th,
    .table td {
        padding: 10px 8px;
        white-space: nowrap;
    }


    .activity-description {
        white-space: normal !important;
        min-width: 250px;
        max-width: 350px;
    }


    .student-name {
        min-width: 170px;
    }


    .ip-address {
        min-width: 130px;
    }


    .activity-time {
        min-width: 160px;
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