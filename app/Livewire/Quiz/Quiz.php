<?php

namespace App\Livewire\Quiz;

use App\Http\Controllers\QuizController;
use App\Models\QuizSession;
use Livewire\Component;

class Quiz extends Component
{
    public $quizSession;
    public function mount($quizId){
        $this->quizSession = (new QuizController())->getQuizSession($quizId);
    }
    public function render()
    {
        return view('livewire.quiz.quiz');
    }
}
