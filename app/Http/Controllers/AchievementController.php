<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\MaterialProgress;
use App\Models\QuizResult;
use Illuminate\Support\Facades\Auth;

class AchievementController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        /*
        |--------------------------------------------------------------------------
        | DATA MATERI
        |--------------------------------------------------------------------------
        */

        $totalMateri = Material::count();

        $materiSelesai = MaterialProgress::where('user_id', $userId)
            ->whereNotNull('completed_at')
            ->count();

        $progressMateri = $totalMateri > 0
            ? round(($materiSelesai / $totalMateri) * 100)
            : 0;


        /*
        |--------------------------------------------------------------------------
        | DATA QUIZ
        |--------------------------------------------------------------------------
        */

        $quizResults = QuizResult::where('user_id', $userId)
            ->get();

        $totalLatihan = $quizResults->count();

        $nilaiTertinggi = $quizResults->max('score') ?? 0;

        $rataRata = $totalLatihan > 0
            ? round($quizResults->avg('score'))
            : 0;


        /*
        |--------------------------------------------------------------------------
        | STATUS KELULUSAN LEVEL
        |--------------------------------------------------------------------------
        */

        $easyPassed = $quizResults
            ->where('difficulty', 'easy')
            ->where('score', '>=', 70)
            ->isNotEmpty();

        $mediumPassed = $quizResults
            ->where('difficulty', 'medium')
            ->where('score', '>=', 70)
            ->isNotEmpty();

        $hardPassed = $quizResults
            ->where('difficulty', 'hard')
            ->where('score', '>=', 70)
            ->isNotEmpty();


        /*
        |--------------------------------------------------------------------------
        | DAFTAR PRESTASI
        |--------------------------------------------------------------------------
        */

        $achievements = [

            [
                'icon' => '🌱',
                'title' => 'Langkah Pertama',
                'description' => 'Selesaikan materi pertamamu.',
                'unlocked' => $materiSelesai >= 1,
                'progress' => min($materiSelesai, 1),
                'target' => 1,
            ],

            [
                'icon' => '📚',
                'title' => 'Rajin Belajar',
                'description' => 'Selesaikan 3 materi pembelajaran.',
                'unlocked' => $materiSelesai >= 3,
                'progress' => min($materiSelesai, 3),
                'target' => 3,
            ],

            [
                'icon' => '🎓',
                'title' => 'Penjelajah Materi',
                'description' => 'Selesaikan seluruh materi SuraSunda.',
                'unlocked' => $totalMateri > 0 &&
                    $materiSelesai >= $totalMateri,
                'progress' => min($materiSelesai, $totalMateri),
                'target' => $totalMateri,
            ],

            [
                'icon' => '✏️',
                'title' => 'Latihan Pertama',
                'description' => 'Kerjakan latihan untuk pertama kali.',
                'unlocked' => $totalLatihan >= 1,
                'progress' => min($totalLatihan, 1),
                'target' => 1,
            ],

            [
                'icon' => '🔥',
                'title' => 'Semangat Latihan',
                'description' => 'Kerjakan latihan sebanyak 5 kali.',
                'unlocked' => $totalLatihan >= 5,
                'progress' => min($totalLatihan, 5),
                'target' => 5,
            ],

            [
                'icon' => '💪',
                'title' => 'Pejuang Sunda',
                'description' => 'Kerjakan latihan sebanyak 10 kali.',
                'unlocked' => $totalLatihan >= 10,
                'progress' => min($totalLatihan, 10),
                'target' => 10,
            ],

            [
                'icon' => '🥉',
                'title' => 'Lulus Easy',
                'description' => 'Dapatkan nilai minimal 70 pada latihan Easy.',
                'unlocked' => $easyPassed,
                'progress' => $easyPassed ? 1 : 0,
                'target' => 1,
            ],

            [
                'icon' => '🥈',
                'title' => 'Lulus Medium',
                'description' => 'Dapatkan nilai minimal 70 pada latihan Medium.',
                'unlocked' => $mediumPassed,
                'progress' => $mediumPassed ? 1 : 0,
                'target' => 1,
            ],

            [
                'icon' => '🥇',
                'title' => 'Lulus Hard',
                'description' => 'Dapatkan nilai minimal 70 pada latihan Hard.',
                'unlocked' => $hardPassed,
                'progress' => $hardPassed ? 1 : 0,
                'target' => 1,
            ],

            [
                'icon' => '⭐',
                'title' => 'Nilai Sempurna',
                'description' => 'Dapatkan nilai 100 pada salah satu latihan.',
                'unlocked' => $nilaiTertinggi >= 100,
                'progress' => min($nilaiTertinggi, 100),
                'target' => 100,
            ],

        ];


        /*
        |--------------------------------------------------------------------------
        | HITUNG PRESTASI
        |--------------------------------------------------------------------------
        */

        $totalPrestasi = count($achievements);

        $prestasiTerbuka = collect($achievements)
            ->where('unlocked', true)
            ->count();

        $persentasePrestasi = $totalPrestasi > 0
            ? round(($prestasiTerbuka / $totalPrestasi) * 100)
            : 0;


        return view('achievements', [
            'achievements' => $achievements,

            'totalPrestasi' => $totalPrestasi,
            'prestasiTerbuka' => $prestasiTerbuka,
            'persentasePrestasi' => $persentasePrestasi,

            'totalMateri' => $totalMateri,
            'materiSelesai' => $materiSelesai,
            'progressMateri' => $progressMateri,

            'totalLatihan' => $totalLatihan,
            'nilaiTertinggi' => $nilaiTertinggi,
            'rataRata' => $rataRata,
        ]);
    }
}