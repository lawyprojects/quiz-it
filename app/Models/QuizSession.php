<?php

namespace App\Models;

use App\Http\Controllers\UtilsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizSession extends Model
{
    use HasFactory;
    protected $fillable = [
        "quiz_id",
        "points",
    ];

     /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->session_id = UtilsController::generateSessionId('quiz_sessions',"quiz");

        });
    }

}
