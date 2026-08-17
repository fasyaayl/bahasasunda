@extends('admin.layouts.app')

@section('title', 'Dashboard Admin')

@section('page-title', 'Dashboard')

@section('content')

<div class="row">

    <div class="col-md-3 mb-4">
        <div class="card card-dashboard">
            <div class="card-body">
                <h6>Total Materi</h6>
                <h2>{{ \App\Models\Material::count() }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card card-dashboard">
            <div class="card-body">
                <h6>Total Soal</h6>
                <h2>{{ \App\Models\Question::count() }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card card-dashboard">
            <div class="card-body">
                <h6>Total Siswa</h6>
                <h2>{{ \App\Models\User::where('role','student')->count() }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card card-dashboard">
            <div class="card-body">
                <h6>Total Hasil Kuis</h6>
                <h2>{{ \App\Models\QuizResult::count() }}</h2>
            </div>
        </div>
    </div>

</div>

<div class="card card-dashboard">

    <div class="card-header">
        Aktivitas Portal Admin
    </div>

    <div class="card-body">

        <p>Selamat datang di Portal Admin SuraSunda.</p>

        <p>
            Gunakan menu di sebelah kiri untuk mengelola:
        </p>

        <ul>
            <li>Materi Pembelajaran</li>
            <li>Soal Kuis</li>
            <li>Data Siswa</li>
            <li>Hasil Kuis</li>
        </ul>

    </div>

</div>

@endsection