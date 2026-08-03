<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LeaderboardController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | AMBIL SEMUA SISWA BESERTA HASIL QUIZ
        |--------------------------------------------------------------------------
        */

        $users = User::with('quizResults')->get();


        /*
        |--------------------------------------------------------------------------
        | BUAT DATA LEADERBOARD
        |--------------------------------------------------------------------------
        */

        $leaderboard = $users
            ->map(function ($user) {

                $results = $user->quizResults;

                $highestScore = $results->max('score') ?? 0;

                $averageScore = $results->count() > 0
                    ? round($results->avg('score'))
                    : 0;

                $totalQuiz = $results->count();

                $passedQuiz = $results
                    ->where('score', '>=', 70)
                    ->count();


                return [
                    'id' => $user->id,

                    'name' => $user->name,

                    'highest_score' => $highestScore,

                    'average_score' => $averageScore,

                    'total_quiz' => $totalQuiz,

                    'passed_quiz' => $passedQuiz,
                ];

            })


            /*
            |--------------------------------------------------------------------------
            | URUTKAN PERINGKAT
            |--------------------------------------------------------------------------
            |
            | 1. Nilai tertinggi
            | 2. Rata-rata nilai
            | 3. Total latihan
            |
            */

            ->sort(function ($a, $b) {

                if (
                    $a['highest_score'] !==
                    $b['highest_score']
                ) {

                    return
                        $b['highest_score']
                        <=>
                        $a['highest_score'];
                }


                if (
                    $a['average_score'] !==
                    $b['average_score']
                ) {

                    return
                        $b['average_score']
                        <=>
                        $a['average_score'];
                }


                return
                    $b['total_quiz']
                    <=>
                    $a['total_quiz'];

            })


            /*
            |--------------------------------------------------------------------------
            | RESET INDEX
            |--------------------------------------------------------------------------
            */

            ->values()


            /*
            |--------------------------------------------------------------------------
            | TAMBAHKAN NOMOR PERINGKAT
            |--------------------------------------------------------------------------
            */

            ->map(function ($user, $index) {

                $user['rank'] = $index + 1;

                return $user;

            });


        /*
        |--------------------------------------------------------------------------
        | CARI PERINGKAT USER YANG LOGIN
        |--------------------------------------------------------------------------
        */

        $myRanking = $leaderboard->firstWhere(
            'id',
            Auth::id()
        );


        /*
        |--------------------------------------------------------------------------
        | KIRIM KE VIEW
        |--------------------------------------------------------------------------
        */

        return view('leaderboard', [

            'leaderboard' => $leaderboard,

            'myRanking' => $myRanking,

        ]);
    }
}