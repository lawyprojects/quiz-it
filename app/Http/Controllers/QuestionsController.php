<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuizQuestion;
use App\Models\QuizSession;
use App\Models\QuizSessionQuestion;
use App\Traits\Quiz\QuizSessionTrait;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    use QuizSessionTrait;
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

    public function getQuizSessionCurrentQuestion(){

        $sessionId = $this->getSessionId();
         // Quiz Session
         $quizSession = QuizSession::where('session_id',$sessionId)->first();

        $quizSessionQuestion = QuizSessionQuestion::where('quiz_session_id', $quizSession->id)->orderBy('id','desc')->first();
       
        if($quizSessionQuestion){

        }else {
            $quizSessionQuestion = $this->addQuestionToQuizSession();
        
        }
        if($quizSessionQuestion){
            return $quizSessionQuestion->question;
        }

        return null;
    }

    public function getQuizSessionNextQuestion(){

        $sessionId = $this->getSessionId();
         // Quiz Session
         $quizSession = QuizSession::where('session_id',$sessionId)->first();

        $quizSessionQuestion = QuizSessionQuestion::where('quiz_session_id', $quizSession->id)->where('status',0)->orderBy('id','desc')->first();
       
        if($quizSessionQuestion){

        }else {
            $quizSessionQuestion = $this->addQuestionToQuizSession();
        
        }
        if($quizSessionQuestion){
            return $quizSessionQuestion->question;
        }

        return null;
    }


    public function addQuestionToQuizSession(){
        $sessionId = $this->getSessionId();
        // Quiz Session
        $quizSession = QuizSession::where('session_id',$sessionId)->first();

        $quizSessionQuestionIds = $this->getQuizSessionQuestionsIds($quizSession->id);
        
        $quizQuestion = QuizQuestion::where('quiz_id',$quizSession->quiz->id)->whereNotIn('question_id',$quizSessionQuestionIds)->first();
       
        if($quizQuestion){
            $question =  $quizQuestion->question;

        $quizSessionQuestion = QuizSessionQuestion::updateOrCreate(
            ['question_id'=> $question->id,
            'quiz_session_id'=> $quizSession->id],
    
        );
       
        return $quizSessionQuestion;
        }

        return null;
        
    }

    public function getQuizSessionQuestionsIds($sessionId){
        $quizSessionQuestionIds = QuizSessionQuestion::where('quiz_session_id', $sessionId)->orderBy('id','desc')->pluck('question_id')->toArray();
        return $quizSessionQuestionIds;
    }

    public function checkIfLastQuestion(){
        $sessionId = $this->getSessionId();
        // Quiz Session
        $quizSession = QuizSession::where('session_id',$sessionId)->first();
        $quizQuestionCount = QuizQuestion::where('quiz_id',$quizSession->quiz->id)->count();
        $quizQuestionAnswered = QuizSessionQuestion::where('quiz_session_id',$quizSession->id)->where('status',1)->count();

        if($quizQuestionCount == $quizQuestionAnswered){
            return true;
        }

        return false;
    }

    

}
