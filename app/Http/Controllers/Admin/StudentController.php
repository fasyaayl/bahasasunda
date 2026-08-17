<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class StudentController extends Controller
{
    // Menampilkan daftar siswa
    public function index()
    {
        $students = User::where('role', 'student')->get();

        return view('admin.students.index', compact('students'));
    }

    // Form tambah siswa
    public function create()
    {
        return view('admin.students.create');
    }

    // Simpan siswa
    public function store()
    {
        //
    }

    // Detail siswa
    public function show(User $student)
    {
        //
    }

    // Form edit siswa
    public function edit(User $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    // Update siswa
    public function update()
    {
        //
    }

    // Hapus siswa
    public function destroy()
    {
        //
    }
}