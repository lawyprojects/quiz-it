<?php

namespace App\Livewire\Questions;

use App\Models\Answer;
use App\Models\Question;
use Livewire\Attributes\Rule;
use Livewire\Component;

class QuestionForm extends Component
{

    #[Rule("required")]
    public $question = '';

    public $answerTypes = [];

    #[Rule("required")]
    public $answerTypeSelected = '';

    public $choiceAnswer = '';

    public $answerStatus = 0;

    public $answers = [];

    public $answerOpen = '';

    public function render()
    {
        $this->answerTypes = config('quizapp.ANSWERS_TYPES');

        return view('livewire.questions.question-form');
    }

    // Add Question Answer
    public function addQuestionAnswer(){
     
        $this->validate([
            'choiceAnswer'=> 'required',
        ]);
        $answer = [];
        $answer['answer'] = $this->choiceAnswer;
        $answer['answerStatus'] = $this->answerStatus;

        array_push($this->answers, $answer);

        $this->reset('choiceAnswer');
    }
    // Answer Type Changed
    public function answerTypeChanged(){
        $this->reset('answers','choiceAnswer');
    }

    // Create
    public function create(){
        $this->validate();

        if($this->answerTypeSelected == config('quizapp.ANSWERS_TYPES')[0]['code']){
            // MULTI CHOICE

        }else  if($this->answerTypeSelected == config('quizapp.ANSWERS_TYPES')[1]['code']){
            // SINGLE CHOICE
            if($this->countCorrectAnswers() > 1){
                request()->session()->flash('error_message',trans('messages.single_correct_answer_required'));
                return ;
            }
        }else  if($this->answerTypeSelected == config('quizapp.ANSWERS_TYPES')[2]['code']){
            // OPEN
            if(empty($this->answerOpen)){
                request()->session()->flash('error_message',trans('messages.open_answer_required'));
                return;
            }
        }
    
        // Add Question
        $question = Question::updateOrCreate(
            [
                'question'=> $this->question,
                'answer_type'=> $this->answerTypeSelected
            ]
            );

        if($question){

            if($this->answerTypeSelected == config('quizapp.ANSWERS_TYPES')[0]['code'] || $this->answerTypeSelected == config('quizapp.ANSWERS_TYPES')[1]['code']){
                // Add Answers
                foreach($this->answers as $answer){
                    $answer = Answer::updateOrCreate(
                        [
                            'question_id'=> $question->id,
                            'answer'=> $answer['answer'],
                        ],
                        [
                            'is_correct'=> $answer['answerStatus'],
                        ]
                    );
                }
            }else  if($this->answerTypeSelected == config('quizapp.ANSWERS_TYPES')[2]['code']){
                $answer = Answer::updateOrCreate(
                    [
                        'question_id'=> $question->id,
                        'answer'=> $this->answerOpen,
                    ],
                    [
                        'is_correct'=> 1,
                    ]
                );
            }
             request()->session()->flash('success_message',sprintf(trans('messages.create.success_message'),'Question'));

            $this->reset();
        }else{
            request()->session()->flash('error_message',sprintf(trans('messages.create.error_message'),'question'));
        }
    }

    public function countCorrectAnswers(){
        $count = 0;
        foreach($this->answers as $answer){
            if($answer['answerStatus'] == 1){
                $count++;
            }
        }

        return $count;
    }

    // Delete Answer
    public function deleteAnswer($index){
        unset($this->answers[$index]);
    }

    // Update Answer Status
    public function updateAnswerStatus($index, $status){
        $this->answers[$index]['answerStatus']=$status;
    }

}
