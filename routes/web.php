<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'homePage'])->name('home-page');

Route::get('/quizzes', [HomeController::class,'quizzes'])->name('home-quizzes-page');
Route::get('/quizzes/{id}/quiz', [QuizController::class,'quizPage'])->name('quiz-page');


Route::group(['prefix'=>'manage/quiz'], function(){
    Route::get('/', [QuizController::class, 'quizzesPage'])->name('quizzes-page');
    Route::get('/create', [QuizController::class, 'createQuizPage'])->name('create-quiz-page');
    Route::get('/{id}/quiz', [QuizController::class, 'quizQuestionsPage'])->name('quiz-questions-page');
    
    
    Route::get('/questions', [QuestionsController::class, 'questionsPage'])->name('questions-page');
    Route::get('/questions/create', [QuestionsController::class, 'createQuestionPage'])->name('create-question-page');
});

// MIGRATIONS
Route::get('/setup/run-migrations', function () {
    return Artisan::call('migrate', ['--force' => true]);
});

