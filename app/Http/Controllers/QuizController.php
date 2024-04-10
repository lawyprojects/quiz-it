<?php

namespace App\Http\Controllers;

use App\Models\QuizQuestion;
use App\Models\QuizSession;
use App\Traits\Quiz\QuizSessionTrait;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    use QuizSessionTrait;
    /**
     * Quizzes Page
     */
    public function quizzesPage(Request $request){
        return view("quizzes.list");
    }

    /**
     * Create Quiz Page
     */
    public function createQuizPage(Request $request){
        return view("quizzes.create-quiz");
    }

    /**
     * Quiz Questions Page
     */
    public function quizQuestionsPage(Request $request,$id){

        return view("quizzes.questions")->with(["quizId"=>$id]);
    }

     /**
     * Quiz Page
     */
    public function quizPage(Request $request, $id){

        return view("quiz")->with(["quizId"=>$id]);
    }

    /**
     * Quiz Questions
     */
    public static function quizQuestions($quizId){
        return QuizQuestion::where("quiz_id",$quizId)->get();
    }

    /**
     * Create Quiz Session
     */
    public function createQuizSession($quizId){

        $quizSession = QuizSession::create(
            [  
                "quiz_id"=> $quizId
            ]
            );
            if($quizSession){
                $this->createSession($quizSession->session_id);
            }
            return $quizSession;
    }

    /**
     * Get Quiz Session
     */
    public function getQuizSession($quizId){
        $quizSessionId = $this->getSessionId();
    
        if($quizSessionId){
            $quizSession = new QuizSession();
            $quizSession->quiz_Id = $quizId;
            $quizSession->save();
           
    
        }else {
            $quizSession = $this->createQuizSession($quizId) ;
        }

        return $quizSession;

    }
}
