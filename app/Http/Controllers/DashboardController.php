<?php

namespace App\Http\Controllers;

use App\Models\QuizResult;
use App\Models\Material;
use App\Models\MaterialProgress;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $totalMateri = Material::count();

        if (!$userId) {
            return view('dashboard', [
                'quizResults' => collect(),
                'totalLatihan' => 0,
                'nilaiTertinggi' => 0,
                'rataRata' => 0,
                'totalMateri' => $totalMateri,
                'materiSelesai' => 0,
                'persentaseMateri' => 0,
            ]);
        }

        $quizResults = QuizResult::where('user_id', $userId)
            ->latest()
            ->get();

        $totalLatihan = $quizResults->count();
        $nilaiTertinggi = $quizResults->max('score') ?? 0;

        $rataRata = $totalLatihan > 0
            ? round($quizResults->avg('score'))
            : 0;

        $materiSelesai = MaterialProgress::where('user_id', $userId)
            ->whereNotNull('completed_at')
            ->count();

        $persentaseMateri = $totalMateri > 0
            ? round(($materiSelesai / $totalMateri) * 100)
            : 0;

        return view('dashboard', [
            'quizResults' => $quizResults,
            'totalLatihan' => $totalLatihan,
            'nilaiTertinggi' => $nilaiTertinggi,
            'rataRata' => $rataRata,
            'totalMateri' => $totalMateri,
            'materiSelesai' => $materiSelesai,
            'persentaseMateri' => $persentaseMateri,
        ]);
    }
}