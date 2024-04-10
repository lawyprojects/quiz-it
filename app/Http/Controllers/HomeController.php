<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Home Page
     */
    public function homePage(){
        return view("home");
    }

    /**
     * Quizzes
     */
    public function quizzes(){
        return view("quizzes");
    }

    /**
     * Quiz Page
     */
    public function quizPage(Request $request,$id){

        return view("quiz")->with(["quizId"=>$id]);
    }
}
