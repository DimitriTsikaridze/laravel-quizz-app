<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function create()
    {
        // For creating a new quiz
        return view('quizzes.form');
    }

    public function edit($id)
    {
        $quiz = Quiz::findOrFail($id);
        return view('quizzes.form', compact('quiz'));
    }

    public function storeOrUpdate(Request $request, $id = null)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:answered,unanswered',
        ]);

        $quiz = $id ? Quiz::findOrFail($id) : new Quiz();

        // Update or create the quiz
        $quiz->fill($validatedData)->save();

        return redirect()->route('quiz.index');
    }
}
