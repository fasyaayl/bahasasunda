<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    // Menampilkan semua materi
    public function index()
    {
        $materials = Material::orderBy('order')->get();

        return view('admin.materials.index', compact('materials'));
    }

    // Halaman tambah materi
    public function create()
    {
        return view('admin.materials.create');
    }

    // Menyimpan materi baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:pemula,menengah,lanjutan',
            'order' => 'required|integer|min:1',
            'content' => 'required|string',
        ]);

        Material::create($validated);

        return redirect()
            ->route('admin.materials.index')
            ->with('success', 'Materi berhasil ditambahkan.');
    }

    // Menampilkan detail materi
    public function show(Material $material)
    {
        return view('admin.materials.show', compact('material'));
    }

    // Halaman edit materi
    public function edit(Material $material)
    {
        return view('admin.materials.edit', compact('material'));
    }

    // Menyimpan perubahan materi
    public function update(Request $request, Material $material)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:pemula,menengah,lanjutan',
            'order' => 'required|integer|min:1',
            'content' => 'required|string',
        ]);

        $material->update($validated);

        return redirect()
            ->route('admin.materials.index')
            ->with('success', 'Materi berhasil diperbarui.');
    }

    // Menghapus materi
    public function destroy(Material $material)
    {
        $material->delete();

        return redirect()
            ->route('admin.materials.index')
            ->with('success', 'Materi berhasil dihapus.');
    }
}