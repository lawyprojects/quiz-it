<?php

namespace App\Livewire\Quizzes;

use App\Models\Quiz;
use Livewire\Component;

class QuizList extends Component
{
    public $quizzes = [];
    public function render()
    {
        $this->quizzes  = Quiz::where("is_active", 1)->get();
        return view('livewire.quizzes.quiz-list');
    }
}
