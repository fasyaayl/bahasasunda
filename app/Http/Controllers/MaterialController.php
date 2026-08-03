<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\MaterialProgress;
use Illuminate\Support\Facades\Auth;

class MaterialController extends Controller
{
    /**
     * Menampilkan semua materi.
     */
    public function index()
    {
        $userId = Auth::id();

        /*
        |--------------------------------------------------------------------------
        | AMBIL SEMUA MATERI
        |--------------------------------------------------------------------------
        */

        $materials = Material::orderBy('order', 'asc')->get();


        /*
        |--------------------------------------------------------------------------
        | KELOMPOKKAN MATERI
        |--------------------------------------------------------------------------
        */

        $pemula = $materials->where('category', 'pemula')->values();

        $menengah = $materials->where('category', 'menengah')->values();

        $lanjutan = $materials->where('category', 'lanjutan')->values();


        /*
        |--------------------------------------------------------------------------
        | MATERI YANG SUDAH SELESAI
        |--------------------------------------------------------------------------
        */

        $completedMaterialIds = MaterialProgress::where(
            'user_id',
            $userId
        )
        ->whereNotNull('completed_at')
        ->pluck('material_id')
        ->unique()
        ->values()
        ->toArray();


        /*
        |--------------------------------------------------------------------------
        | TOTAL MATERI PER KATEGORI
        |--------------------------------------------------------------------------
        */

        $totalPemula = $pemula->count();

        $totalMenengah = $menengah->count();

        $totalLanjutan = $lanjutan->count();


        /*
        |--------------------------------------------------------------------------
        | JUMLAH MATERI SELESAI PER KATEGORI
        |--------------------------------------------------------------------------
        */

        $selesaiPemula = $pemula
            ->whereIn('id', $completedMaterialIds)
            ->count();

        $selesaiMenengah = $menengah
            ->whereIn('id', $completedMaterialIds)
            ->count();

        $selesaiLanjutan = $lanjutan
            ->whereIn('id', $completedMaterialIds)
            ->count();


        /*
        |--------------------------------------------------------------------------
        | PERSENTASE PROGRESS
        |--------------------------------------------------------------------------
        */

        $progressPemula = $totalPemula > 0
            ? round(($selesaiPemula / $totalPemula) * 100)
            : 0;

        $progressMenengah = $totalMenengah > 0
            ? round(($selesaiMenengah / $totalMenengah) * 100)
            : 0;

        $progressLanjutan = $totalLanjutan > 0
            ? round(($selesaiLanjutan / $totalLanjutan) * 100)
            : 0;


        /*
        |--------------------------------------------------------------------------
        | TOTAL PROGRESS KESELURUHAN
        |--------------------------------------------------------------------------
        */

        $totalMateri = $materials->count();

        $totalSelesai = count(
            array_intersect(
                $materials->pluck('id')->toArray(),
                $completedMaterialIds
            )
        );

        $progressTotal = $totalMateri > 0
            ? round(($totalSelesai / $totalMateri) * 100)
            : 0;


        /*
        |--------------------------------------------------------------------------
        | KIRIM KE VIEW
        |--------------------------------------------------------------------------
        */

        return view('materials.index', [

            'pemula' => $pemula,
            'menengah' => $menengah,
            'lanjutan' => $lanjutan,

            'completedMaterialIds' => $completedMaterialIds,

            'totalPemula' => $totalPemula,
            'totalMenengah' => $totalMenengah,
            'totalLanjutan' => $totalLanjutan,

            'selesaiPemula' => $selesaiPemula,
            'selesaiMenengah' => $selesaiMenengah,
            'selesaiLanjutan' => $selesaiLanjutan,

            'progressPemula' => $progressPemula,
            'progressMenengah' => $progressMenengah,
            'progressLanjutan' => $progressLanjutan,

            'totalMateri' => $totalMateri,
            'totalSelesai' => $totalSelesai,
            'progressTotal' => $progressTotal,
        ]);
    }


    /**
     * Menampilkan detail satu materi.
     */
    public function show(Material $material)
    {
        /*
        |--------------------------------------------------------------------------
        | CEK STATUS MATERI USER
        |--------------------------------------------------------------------------
        */

        $isCompleted = MaterialProgress::where(
            'user_id',
            Auth::id()
        )
        ->where('material_id', $material->id)
        ->whereNotNull('completed_at')
        ->exists();


        /*
        |--------------------------------------------------------------------------
        | TAMPILKAN DETAIL
        |--------------------------------------------------------------------------
        */

        return view('materials.show', [
            'material' => $material,
            'isCompleted' => $isCompleted,
        ]);
    }
}