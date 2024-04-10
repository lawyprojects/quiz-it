<?php

namespace App\Livewire\Quizzes;

use App\Models\Quiz;
use Livewire\Attributes\Rule;
use Livewire\Component;

class QuizForm extends Component
{
    
    #[Rule("required")]
    public $quizName = '';
    public $quizDesc = '';

    public function render()
    {
        return view('livewire.quizzes.quiz-form');
    }

    // Create
    public function create(){
        $this->validate();

        $quiz = Quiz::updateOrCreate(
            [
            'name'=> $this->quizName,
            ],
            [
                'description'=> $this->quizDesc,
            ]
    
    );
        if($quiz){
            request()->session()->flash('success_message',sprintf(trans('messages.create.success_message'),'Quiz'));
            $this->reset();
        }else {
            request()->session()->flash('error_message',sprintf(trans('messages.create.error_message'),'quiz'));
        }
    }
}
