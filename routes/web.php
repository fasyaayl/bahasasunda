<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MaterialProgressController;
use App\Http\Controllers\Admin\QuestionController as AdminQuestionController;
use App\Http\Controllers\Admin\MaterialController as AdminMaterialController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\Admin\QuizResultController as AdminQuizResultController;
use App\Http\Controllers\Admin\ActivityLogController;


use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizResultController;

use App\Models\Material;
use App\Models\MaterialProgress;
use App\Models\QuizResult;


/*
|--------------------------------------------------------------------------
| HALAMAN UTAMA
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

/*
|--------------------------------------------------------------------------
| REGISTER
|--------------------------------------------------------------------------
*/

Route::get(
    '/register',
    [RegisterController::class, 'showRegister']
)->name('register');

Route::post(
    '/register',
    [RegisterController::class, 'register']
)->name('register.process');


/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get(
    '/login',
    [LoginController::class, 'showLogin']
)->name('login');

Route::post(
    '/login',
    [LoginController::class, 'login']
)->name('login.process');


/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::post(
    '/logout',
    [LoginController::class, 'logout']
)
->middleware('auth')
->name('logout');


/*
|--------------------------------------------------------------------------
| HALAMAN YANG HARUS LOGIN
|--------------------------------------------------------------------------
*/

Route::get(
    '/dashboard',
    [DashboardController::class, 'index']
)->name('dashboard');


Route::middleware('auth')->group(function () {


    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */




    /*
    |--------------------------------------------------------------------------
    | RIWAYAT NILAI
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/riwayat',
        [HistoryController::class, 'index']
    )->name('riwayat');


    /*
    |--------------------------------------------------------------------------
    | PERINGKAT
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/peringkat',
        [LeaderboardController::class, 'index']
    )->name('peringkat');


    /*
    |--------------------------------------------------------------------------
    | PRESTASI
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/prestasi',
        [AchievementController::class, 'index']
    )->name('prestasi');


    /*
    |--------------------------------------------------------------------------
    | PROFIL SISWA
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/profil',
        [ProfileController::class, 'index']
    )->name('profil');

    Route::put(
        '/profil',
        [ProfileController::class, 'update']
    )->name('profil.update');


    /*
    |--------------------------------------------------------------------------
    | MATERI BELAJAR
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/materi',
        [MaterialController::class, 'index']
    )->name('materi.index');


    /*
    |--------------------------------------------------------------------------
    | DETAIL MATERI
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/materi/{material}',
        [MaterialController::class, 'show']
    )->name('materi.show');


    /*
    |--------------------------------------------------------------------------
    | SELESAIKAN MATERI
    |--------------------------------------------------------------------------
    */

    Route::post(
        '/materi/{material}/selesai',
        [MaterialProgressController::class, 'complete']
    )->name('materi.complete');


    /*
    |--------------------------------------------------------------------------
    | PILIH TINGKAT KESULITAN
    |--------------------------------------------------------------------------
    |
    | Semua level quiz bebas diakses.
    | Easy, Medium, dan Hard tidak dikunci.
    |
    */

    Route::get('/latihan', function () {

        $userId = Auth::id();
        $passingScore = 70;


        /*
        |--------------------------------------------------------------------------
        | TOTAL MATERI
        |--------------------------------------------------------------------------
        */

        $totalPemula = Material::where(
            'category',
            'pemula'
        )->count();

        $totalMenengah = Material::where(
            'category',
            'menengah'
        )->count();

        $totalLanjutan = Material::where(
            'category',
            'lanjutan'
        )->count();


        /*
        |--------------------------------------------------------------------------
        | MATERI YANG SUDAH SELESAI
        |--------------------------------------------------------------------------
        */

        $selesaiPemula = MaterialProgress::where(
            'user_id',
            $userId
        )
        ->whereNotNull('completed_at')
        ->whereHas('material', function ($query) {

            $query->where(
                'category',
                'pemula'
            );

        })
        ->count();


        $selesaiMenengah = MaterialProgress::where(
            'user_id',
            $userId
        )
        ->whereNotNull('completed_at')
        ->whereHas('material', function ($query) {

            $query->where(
                'category',
                'menengah'
            );

        })
        ->count();


        $selesaiLanjutan = MaterialProgress::where(
            'user_id',
            $userId
        )
        ->whereNotNull('completed_at')
        ->whereHas('material', function ($query) {

            $query->where(
                'category',
                'lanjutan'
            );

        })
        ->count();


        /*
        |--------------------------------------------------------------------------
        | STATUS MATERI
        |--------------------------------------------------------------------------
        |
        | Ini hanya untuk menampilkan progress.
        | Tidak digunakan untuk mengunci quiz.
        |
        */

        $pemulaCompleted =
            $totalPemula > 0 &&
            $selesaiPemula >= $totalPemula;

        $menengahCompleted =
            $totalMenengah > 0 &&
            $selesaiMenengah >= $totalMenengah;

        $lanjutanCompleted =
            $totalLanjutan > 0 &&
            $selesaiLanjutan >= $totalLanjutan;


        /*
        |--------------------------------------------------------------------------
        | STATUS KELULUSAN
        |--------------------------------------------------------------------------
        |
        | Tetap dihitung untuk statistik.
        | Tidak digunakan untuk mengunci level.
        |
        */

        $easyPassed = QuizResult::where(
            'user_id',
            $userId
        )
        ->where('difficulty', 'easy')
        ->where('score', '>=', $passingScore)
        ->exists();


        $mediumPassed = QuizResult::where(
            'user_id',
            $userId
        )
        ->where('difficulty', 'medium')
        ->where('score', '>=', $passingScore)
        ->exists();


        $hardPassed = QuizResult::where(
            'user_id',
            $userId
        )
        ->where('difficulty', 'hard')
        ->where('score', '>=', $passingScore)
        ->exists();


        /*
        |--------------------------------------------------------------------------
        | NILAI TERTINGGI
        |--------------------------------------------------------------------------
        */

        $bestEasy = QuizResult::where(
            'user_id',
            $userId
        )
        ->where('difficulty', 'easy')
        ->max('score') ?? 0;


        $bestMedium = QuizResult::where(
            'user_id',
            $userId
        )
        ->where('difficulty', 'medium')
        ->max('score') ?? 0;


        $bestHard = QuizResult::where(
            'user_id',
            $userId
        )
        ->where('difficulty', 'hard')
        ->max('score') ?? 0;


        /*
        |--------------------------------------------------------------------------
        | SEMUA LEVEL DIBUKA
        |--------------------------------------------------------------------------
        */

        $easyUnlocked = true;
        $mediumUnlocked = true;
        $hardUnlocked = true;


        /*
        |--------------------------------------------------------------------------
        | KIRIM DATA
        |--------------------------------------------------------------------------
        */

        return view('difficulty', [

            'totalPemula' => $totalPemula,
            'totalMenengah' => $totalMenengah,
            'totalLanjutan' => $totalLanjutan,

            'selesaiPemula' => $selesaiPemula,
            'selesaiMenengah' => $selesaiMenengah,
            'selesaiLanjutan' => $selesaiLanjutan,

            'pemulaCompleted' => $pemulaCompleted,
            'menengahCompleted' => $menengahCompleted,
            'lanjutanCompleted' => $lanjutanCompleted,

            /*
            | Semua level selalu terbuka
            */

            'easyUnlocked' => $easyUnlocked,
            'mediumUnlocked' => $mediumUnlocked,
            'hardUnlocked' => $hardUnlocked,

            'easyPassed' => $easyPassed,
            'mediumPassed' => $mediumPassed,
            'hardPassed' => $hardPassed,

            'bestEasy' => $bestEasy,
            'bestMedium' => $bestMedium,
            'bestHard' => $bestHard,

            'passingScore' => $passingScore,

        ]);

    })->name('latihan');


    /*
    |--------------------------------------------------------------------------
    | TAMPILKAN QUIZ
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/quiz/{difficulty}',
        [QuizController::class, 'show']
    )->name('quiz.show');


    /*
    |--------------------------------------------------------------------------
    | SUBMIT QUIZ
    |--------------------------------------------------------------------------
    */

    Route::post(
        '/quiz/{difficulty}/submit',
        [QuizResultController::class, 'submit']
    )->name('quiz.submit');

});
/*
|--------------------------------------------------------------------------
| PORTAL ADMIN - KELOLA SOAL QUIZ
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'teacher'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

       Route::resource('questions', AdminQuestionController::class);

Route::resource('materials', AdminMaterialController::class);

Route::resource('students', AdminStudentController::class);

Route::resource('quiz-results', AdminQuizResultController::class);

Route::get(
    'activities',
    [ActivityLogController::class, 'index']
)->name('activities.index');
Route::get(
    'notifications',
    [ActivityLogController::class, 'notifications']
)->name('notifications');

});