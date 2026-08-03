<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\MaterialProgress;
use App\Models\QuizResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userId = Auth::id();

        $quizResults = QuizResult::where('user_id', $userId)
            ->latest()
            ->get();

        $totalLatihan = $quizResults->count();

        $nilaiTertinggi = $quizResults->max('score') ?? 0;

        $rataRata = $totalLatihan > 0
            ? round($quizResults->avg('score'))
            : 0;

        $totalLulus = $quizResults
            ->where('score', '>=', 70)
            ->count();

        $totalMateri = Material::count();

        $materiSelesai = MaterialProgress::where('user_id', $userId)
            ->whereNotNull('completed_at')
            ->count();

        $persentaseMateri = $totalMateri > 0
            ? round(($materiSelesai / $totalMateri) * 100)
            : 0;

        return view('profile', [
            'user' => $user,
            'totalLatihan' => $totalLatihan,
            'nilaiTertinggi' => $nilaiTertinggi,
            'rataRata' => $rataRata,
            'totalLulus' => $totalLulus,
            'totalMateri' => $totalMateri,
            'materiSelesai' => $materiSelesai,
            'persentaseMateri' => $persentaseMateri,
        ]);
    }


    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email,' . $user->id,
            ],

            'password' => [
                'nullable',
                'string',
                'min:8',
                'confirmed',
            ],
        ]);


        $user->name = $request->name;
        $user->email = $request->email;


        if ($request->filled('password')) {
            $user->password = Hash::make(
                $request->password
            );
        }


        $user->save();


        return redirect()
            ->route('profil')
            ->with(
                'success',
                'Profil berhasil diperbarui.'
            );
    }
}