<?php

namespace App\Livewire\Quiz;

use App\Http\Controllers\AnswersController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\QuizController;
use App\Models\QuizQuestion;
use App\Models\QuizSession;
use App\Models\QuizSessionQuestion;
use App\Traits\Quiz\QuizSessionTrait;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Quiz extends Component
{
    use QuizSessionTrait;

    public $quizSession;
    public $question = null;
    public $questionAnswers = [];
    public $answers = [];
    public $selectedAnswers = [];
    public $correct = false;
    public $inCorrect = false;
    public $showNextButton = false;


    public function mount($quizId){
        $this->quizSession = (new QuizController())->getQuizSession($quizId);
    }
    public function render()
    {
        $this->setSessionDetails();
        return view('livewire.quiz.quiz');
    }

    public function setSessionDetails(){
        $this->question = (new QuestionsController())->getQuizSessionCurrentQuestion();
    
        if($this->question){
            $this->answers =  AnswersController::questionAnswers($this->question->id);
        }
        
    }

    // Select / Descect Answer
    public function selectAnswer($answerId){
        AnswersController::updateQuizQuestionAnswers($this->quizSession->id,$this->question->id,$answerId);
        // Check if selected
        
        // Update Qestion Answers

    }
    // Answer Selected
    public function answerSelected($answerId){
        $quizSessionQuestion = QuizSessionQuestion::where('quiz_session_id',$this->quizSession->id)->where('question_id',$this->question->id)->first(); 
        
        if($quizSessionQuestion){
            $selectedAnswers = $quizSessionQuestion->answers;
            if($selectedAnswers){
            $answersArray = json_decode($selectedAnswers, true);
            if($answersArray){
                return in_array($answerId,$answersArray);
            }
        }
        }
       
        return false;
    }
    /**
     * Next Question
     */
    public function nextQuestion(){
        $this->question = (new QuestionsController())->getQuizSessionNextQuestion();
    
        if($this->question){
            $this->answers =  AnswersController::questionAnswers($this->question->id);
        }
       
    }

    // Subimit Answers
    public function submitAnswers(){
        $result = AnswersController::validatedQuestionAnswers($this->quizSession->id, $this->question->id);
        $isCorrect = $result == true ? 1:0;
        if($this->question){
            QuizSessionQuestion::where('quiz_session_id',$this->quizSession->id)->where('question_id',$this->question->id)->update(['status'=>1,'is_correct'=>$isCorrect]);
            $this->setSessionDetails();
        }
      
    }

    // End Quiz
    public function endQuiz(){
        $this->deleteQuizSession();
        $this->redirectRoute('home-quizzes-page');

    }
    // Close WIndow
    public function closeWindow(){
        $this->deleteQuizSession();
        $this->redirectRoute('home-quizzes-page');
    }

    // Show Answers
    public function showAnswers(){

        if($this->question && $this->quizSession){

        return QuizSessionQuestion::Where('quiz_session_id', $this->quizSession->id)->where('question_id',$this->question->id)->where('status',1)->exists();
        }
        return false;
    }

    // Quiz Complete
    public function quizComplete(){
        if($this->quizSession){
        return QuizSession::where('id',$this->quizSession->id)->where('is_complete',1)->exists();
        }
        return false;
    }

    // Question Answered
    public function questionAnswered(){
        if($this->question && $this->quizSession){
        return QuizSessionQuestion::where('quiz_session_id', $this->quizSession->id)->where('question_id',$this->question->id)->where('status',1)->exists();
        }
        return false;
    }

    // Show Done
    public function showCompleteQuiz(){
        return (new QuestionsController())->checkIfLastQuestion();
    }
    public function completeQuiz(){
        if($this->quizSession){
        QuizSession::where('id',$this->quizSession->id)->update(['is_complete'=>1]);
        $this->setSessionDetails();
        }
    }

    // Get Question Number
    public function questionNumber(){
        $quizSessionQuestion = QuizSessionQuestion::where('quiz_session_id', $this->quizSession->id)->count();


        return $quizSessionQuestion;

    }

    public function quizScore(){
        $correctAnswerCount = QuizSessionQuestion::where('quiz_session_id', $this->quizSession->id)->where('is_correct',1)->count();
        $quizQuestions =  QuizSessionQuestion::where('quiz_session_id', $this->quizSession->id)->count();

        return $correctAnswerCount."/".$quizQuestions;
    }


}
