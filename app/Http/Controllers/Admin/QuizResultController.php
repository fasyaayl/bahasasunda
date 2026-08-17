<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuizResult;

class QuizResultController extends Controller
{
    public function index()
    {
        $quizResults = QuizResult::latest()->get();

        return view('admin.quiz-results.index', compact('quizResults'));
    }
}