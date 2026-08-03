<?php

namespace App\Http\Controllers;

use App\Models\QuizResult;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
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

        $totalBelumLulus = $quizResults
            ->where('score', '<', 70)
            ->count();

        $totalEasy = $quizResults
            ->where('difficulty', 'easy')
            ->count();

        $totalMedium = $quizResults
            ->where('difficulty', 'medium')
            ->count();

        $totalHard = $quizResults
            ->where('difficulty', 'hard')
            ->count();

        $bestEasy = $quizResults
            ->where('difficulty', 'easy')
            ->max('score') ?? 0;

        $bestMedium = $quizResults
            ->where('difficulty', 'medium')
            ->max('score') ?? 0;

        $bestHard = $quizResults
            ->where('difficulty', 'hard')
            ->max('score') ?? 0;

        return view('history', [
            'quizResults' => $quizResults,
            'totalLatihan' => $totalLatihan,
            'nilaiTertinggi' => $nilaiTertinggi,
            'rataRata' => $rataRata,
            'totalLulus' => $totalLulus,
            'totalBelumLulus' => $totalBelumLulus,
            'totalEasy' => $totalEasy,
            'totalMedium' => $totalMedium,
            'totalHard' => $totalHard,
            'bestEasy' => $bestEasy,
            'bestMedium' => $bestMedium,
            'bestHard' => $bestHard,
        ]);
    }
}