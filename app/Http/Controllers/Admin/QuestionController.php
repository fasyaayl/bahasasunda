<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    // Menampilkan semua soal
    public function index()
    {
        $questions = Question::orderBy('difficulty')
            ->orderBy('id')
            ->get();

        return view('admin.questions.index', compact('questions'));
    }

    // Form tambah soal
    public function create()
    {
        return view('admin.questions.create');
    }

    // Simpan soal baru
    public function store(Request $request)
    {
        $request->validate([
            'difficulty' => 'required',
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'correct_answer' => 'required',
            'explanation' => 'nullable',
        ]);

        Question::create($request->all());

        return redirect()
            ->route('admin.questions.index')
            ->with('success', 'Soal berhasil ditambahkan.');
    }

    // Form edit soal
    public function edit(Question $question)
    {
        return view('admin.questions.edit', compact('question'));
    }

    // Update soal
    public function update(Request $request, Question $question)
    {
        $request->validate([
            'difficulty' => 'required',
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'correct_answer' => 'required',
            'explanation' => 'nullable',
        ]);

        $question->update($request->all());

        return redirect()
            ->route('admin.questions.index')
            ->with('success', 'Soal berhasil diperbarui.');
    }

    // Hapus soal
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()
            ->route('admin.questions.index')
            ->with('success', 'Soal berhasil dihapus.');
    }
}