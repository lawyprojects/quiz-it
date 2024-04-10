<?php

namespace App\Livewire\Quizzes;

use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\QuizController;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use Livewire\Component;

class QuizQuestions extends Component
{
    public  $quiz;
    public $questions = [];
    public $quizQuestions = [];

    public function mount($quizId ){
        $this->quiz = Quiz::find($quizId);
       $this->updateQuestionsList();
    }
    public function render()
    {
       
        return view('livewire.quizzes.quiz-questions');
    }

    public function addToQuiz($id){
        $quizQuestion = QuizQuestion::updateOrCreate(
            ['quiz_id'=> $this->quiz->id,'question_id'=> $id],
        );
        if($quizQuestion){
            $this->updateQuestionsList();
        }
    }

    public function removeFromQuiz($id){
        $quizQuestion = QuizQuestion::where('quiz_id',$this->quiz->id)->where('question_id',$id)->delete();
        if($quizQuestion){
            $this->updateQuestionsList();
        }
    }

    public function updateQuestionsList(){
        $this->quizQuestions = QuizController::quizQuestions($this->quiz->id);
        $this->questions = QuestionsController::questionsNotInQuiz($this->quiz->id);
    }



    
}
