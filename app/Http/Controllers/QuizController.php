<?php

namespace App\Http\Controllers;

use App\Models\Question;

class QuizController extends Controller
{
    public function show($difficulty)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDASI TINGKAT KESULITAN
        |--------------------------------------------------------------------------
        */

        if (!in_array($difficulty, ['easy', 'medium', 'hard'])) {
            abort(404);
        }

        /*
        |--------------------------------------------------------------------------
        | AMBIL SOAL
        |--------------------------------------------------------------------------
        |
        | Semua tingkat kesulitan bebas diakses.
        | Tidak perlu menyelesaikan materi atau lulus level sebelumnya.
        |
        */

        $questions = Question::where('difficulty', $difficulty)
            ->inRandomOrder()
            ->limit(10)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | TAMPILKAN QUIZ
        |--------------------------------------------------------------------------
        */

        return view('quiz', [
            'questions' => $questions,
            'difficulty' => $difficulty,
        ]);
    }
}