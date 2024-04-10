<?php

namespace App\Livewire\Quiz;

use App\Models\Quiz;
use Livewire\Component;

class Quizzes extends Component
{
    public $quizzes = [];
    public function render()
    {
        $this->quizzes  = Quiz::where("is_active", 1)->get();
        return view('livewire.quiz.quizzes');
    }


}
