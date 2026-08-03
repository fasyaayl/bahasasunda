<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\MaterialProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MaterialProgressController extends Controller
{
    /**
     * Tandai materi sebagai sudah dipelajari.
     */
    public function complete(Request $request, Material $material)
    {
        $userId = Auth::id();

        /*
        |--------------------------------------------------------------------------
        | CEK PROGRESS YANG SUDAH ADA
        |--------------------------------------------------------------------------
        */

        $progress = MaterialProgress::where('user_id', $userId)
            ->where('material_id', $material->id)
            ->first();


        /*
        |--------------------------------------------------------------------------
        | JIKA SUDAH SELESAI
        |--------------------------------------------------------------------------
        |
        | Jangan ubah completed_at lagi.
        |
        */

        if ($progress && $progress->completed_at !== null) {

            return redirect()
                ->route('materi.show', $material->id)
                ->with(
                    'success',
                    'Materi ini sudah pernah kamu selesaikan.'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | SIMPAN PROGRESS
        |--------------------------------------------------------------------------
        */

        MaterialProgress::updateOrCreate(
            [
                'user_id' => $userId,
                'material_id' => $material->id,
            ],
            [
                'completed_at' => now(),
            ]
        );


        /*
        |--------------------------------------------------------------------------
        | KEMBALI KE DETAIL MATERI
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('materi.show', $material->id)
            ->with(
                'success',
                'Materi berhasil ditandai sudah dipelajari.'
            );
    }
}