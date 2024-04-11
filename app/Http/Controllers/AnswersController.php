<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\QuizSessionQuestion;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    public static function questionAnswers($questionId)
    {
        $answers = Answer::where("question_id", $questionId)->get();
        return $answers;
    }

    public static function checkIfAnswerSelected($quizSessionId, $questionId, $answerId)
    {
        $answers = QuizSessionQuestion::where("quiz_session_id", $quizSessionId)->where('question_id', $questionId)->first();
    }
    public static function updateQuizQuestionAnswers($quizSessionId, $questionId, $answerId)
    {
        $quizQuestionSession = QuizSessionQuestion::where('quiz_session_id', $quizSessionId)->where('question_id', $questionId)->first();
        $question = Question::where('id', $questionId)->first();
        if ($quizQuestionSession) {
            $answers = $quizQuestionSession->answers;

            if ($answers) {
                $answersArray = json_decode($answers, true);

                if ($question->answer_type == config('quizapp.ANSWERS_TYPES')[0]['code']) {
                    // MULTI CHOICE

                    if (in_array($answerId, $answersArray)) {
                        // remove
                        $answersArray = array_diff($answersArray, array($answerId));

                        $quizQuestionSession->answers = json_encode($answersArray);
                        $quizQuestionSession->save();
                    } else {
                        // Add
                        $answersArray = json_decode($answers);
                        array_push($answersArray, $answerId);
                        $quizQuestionSession->answers = json_encode($answersArray);
                        $quizQuestionSession->save();
                    }
                    $quizQuestionSession->answers = json_encode($answersArray);
                    $quizQuestionSession->save();
                } else if ($question->answer_type == config('quizapp.ANSWERS_TYPES')[1]['code']) {

                    // SINGLE CHOICE
                    $answersArray1 = array();;
                    array_push($answersArray1, $answerId);

                    $quizQuestionSession->answers = json_encode($answersArray1);
                    $quizQuestionSession->save();
                }
            } else {
                $answersArray1 = array();;
                array_push($answersArray1, $answerId);

                $quizQuestionSession->answers = json_encode($answersArray1);
                $quizQuestionSession->save();
            }
        }
    }


    public static function checkIfActiveQuestion($quizSessionId, $questionId)
    {
        return QuizSessionQuestion::where('quiz_session_id', $quizSessionId)->where('question_id', $questionId)->where('status', 0)->exists();
    }
    public static function validatedQuestionAnswers($quizSessionId, $questionId)
    {
        $questionCorrectAnswers = Answer::where("question_id", $questionId)->where('is_correct', 1)->pluck('id')->toArray();

        $quizQuestionSession = QuizSessionQuestion::where('quiz_session_id', $quizSessionId)->where('question_id', $questionId)->first();
        $answers = $quizQuestionSession->answers;


        if ($answers) {
            $answers = json_decode($answers);
            if ($answers) {
                if (count($answers) > 0) {

                    if (count(array_diff($answers, $questionCorrectAnswers)) == 0) {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
        }
        return false;
    }
}
