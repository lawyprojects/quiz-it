<?php
namespace App\Traits\Quiz;

trait QuizSessionTrait
{
    public function createSession($sessionId){
        session(['quiz_session' => $sessionId]);
    }
    public function deleteQuizSession($sessionId){
       session()->forget('quiz_session');
    }
    public function getSessionId(){
        return session()->get('quiz_session');
    }
}
