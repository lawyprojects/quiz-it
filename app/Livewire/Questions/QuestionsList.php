<?php

namespace App\Livewire\Questions;

use Livewire\Component;

class QuestionsList extends Component
{
    public $items = [];
    public function render()
    {
        return view('livewire.questions.questions-list');
    }
}
