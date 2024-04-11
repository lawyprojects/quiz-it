<?php
namespace App\Traits\Quiz;

trait QuizSessionTrait
{
    public function createSession($sessionId){
        session(['quiz_session' => $sessionId]);
    }
    public function deleteQuizSession(){
       session()->forget('quiz_session');
       session()->flush();
    }
    public function getSessionId(){
        return session()->get('quiz_session');
    }
}
