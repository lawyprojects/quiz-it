<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
     /**
     * Questions Page
     */
    public function questionsPage(Request $request){
        return view("questions.list");
    }

    /**
     * Create Question Page
     */
    public function createQuestionPage(Request $request){
        return view("questions.create-question");
    }

    public static  function questionsNotInQuiz($quizId){
        $quizQuestions = QuizQuestion::where("quiz_id",$quizId)->get()->pluck("question_id")->toArray();
        return Question::where("is_active",1)->whereNotIn('id', $quizQuestions)->get();
    }
}
