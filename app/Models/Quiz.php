<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    /**
     * Fillable
     */
    protected $fillable = [
        "name","description",
    ];

    public function questions(){
        return $this->hasMany(QuizQuestion::class);
    }
}
