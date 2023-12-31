<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quiz', function () {
    $quiz = [
        'What is the capital of France?' => ['answer' => 'Paris', 'status' => 'answered'],
        'What is the largest planet in our solar system?' => ['answer' => 'Jupiter', 'status' => 'unanswered'],
        'What is the smallest country in the world?' => ['answer' => 'Vatican City', 'status' => 'answered'],
        'What is the highest mountain in the world?' => ['answer' => 'Mount Everest', 'status' => 'unanswered'],
    ];
    return view('quiz', compact('quiz'));
});


Route::get('/quiz/create', [QuizController::class, 'create'])->name('quiz.create');
Route::get('/quiz/{id}/edit', [QuizController::class, 'edit'])->name('quiz.edit');
Route::post('/quiz/{id?}', [QuizController::class, 'storeOrUpdate'])->name('quiz.storeOrUpdate');