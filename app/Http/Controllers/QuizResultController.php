<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuizResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\ActivityService;

class QuizResultController extends Controller
{
    public function submit(Request $request, $difficulty)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDASI LEVEL
        |--------------------------------------------------------------------------
        */

        if (!in_array($difficulty, ['easy', 'medium', 'hard'])) {
            abort(404);
        }

        /*
        |--------------------------------------------------------------------------
        | PASTIKAN USER LOGIN
        |--------------------------------------------------------------------------
        */

        $userId = Auth::id();

        if (!$userId) {
            return redirect()
                ->route('login')
                ->with('error', 'Silakan login terlebih dahulu.');
        }
        ActivityService::log(
    $userId,
    'quiz_start',
    'Memulai quiz ' . ucfirst($difficulty),
    request()->ip()
);

        $passingScore = 70;

        /*
        |--------------------------------------------------------------------------
        | VALIDASI DATA QUIZ
        |--------------------------------------------------------------------------
        */

        $validated = $request->validate([
            'question_ids' => ['required', 'array', 'size:10'],
            'question_ids.*' => ['required', 'integer', 'distinct'],

            'answers' => ['required', 'array', 'size:10'],
            'answers.*' => ['required', 'in:a,b,c,d'],
        ]);

        $questionIds = $validated['question_ids'];
        $answers = $validated['answers'];

        /*
        |--------------------------------------------------------------------------
        | AMBIL SOAL YANG DIKERJAKAN
        |--------------------------------------------------------------------------
        */

        $questions = Question::whereIn('id', $questionIds)
            ->where('difficulty', $difficulty)
            ->get()
            ->keyBy('id');

        /*
        |--------------------------------------------------------------------------
        | PASTIKAN 10 SOAL VALID
        |--------------------------------------------------------------------------
        */

        if ($questions->count() !== 10) {
            return redirect()
                ->route('latihan')
                ->with(
                    'error',
                    'Data latihan tidak valid. Silakan mulai latihan kembali.'
                );
        }

        /*
        |--------------------------------------------------------------------------
        | HITUNG JAWABAN
        |--------------------------------------------------------------------------
        */

        $correct = 0;
        $wrong = 0;
        $results = [];

        foreach ($questionIds as $questionId) {

            $question = $questions->get($questionId);

            $userAnswer = $answers[$questionId] ?? null;

            /*
            | Samakan format supaya A/a tidak bermasalah
            */

            $userAnswer = strtolower(trim((string) $userAnswer));

            $correctAnswer = strtolower(
                trim((string) $question->correct_answer)
            );

            $isCorrect = $userAnswer === $correctAnswer;

            if ($isCorrect) {
                $correct++;
            } else {
                $wrong++;
            }

            $results[] = [
                'question' => $question,
                'user_answer' => $userAnswer,
                'is_correct' => $isCorrect,
            ];
        }

        /*
        |--------------------------------------------------------------------------
        | HITUNG NILAI
        |--------------------------------------------------------------------------
        */

        $total = count($questionIds);

        $score = $total > 0
            ? round(($correct / $total) * 100)
            : 0;

        $isPassed = $score >= $passingScore;

        /*
        |--------------------------------------------------------------------------
        | SIMPAN HASIL
        |--------------------------------------------------------------------------
        */

        QuizResult::create([
            'user_id' => $userId,
            'difficulty' => $difficulty,
            'score' => $score,
            'correct' => $correct,
            'wrong' => $wrong,
            'total' => $total,
        ]);
        ActivityService::log(
    $userId,
    'quiz_finish',
    'Menyelesaikan quiz ' . ucfirst($difficulty) .
    ' | Nilai: ' . $score .
    ' | Benar: ' . $correct .
    ' | Salah: ' . $wrong,
    request()->ip()
);

        /*
        |--------------------------------------------------------------------------
        | LANGSUNG TAMPILKAN NILAI
        |--------------------------------------------------------------------------
        */

        return view('quiz-result', [
            'difficulty' => $difficulty,
            'score' => $score,
            'correct' => $correct,
            'wrong' => $wrong,
            'total' => $total,
            'results' => $results,
            'passingScore' => $passingScore,
            'isPassed' => $isPassed,
        ]);
    }
}