<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizSessionQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        "question_id",
        "quiz_session_id",
    ];

    public function question(){
        return $this->belongsTo(Question::class);
    }
}
