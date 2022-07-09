<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller
{
    function index($id)
    {
        $quiz_index = Session::get("quiz_index");
        $qestion = Question::find($id);
        $count_qestion = Question::count(); 
        
        return view("question",[
            "qestion" => $qestion,
            "count_qestion" => $count_qestion,
            "quiz_index" => $quiz_index
        ]);
    }
    function check(Request $request)
    {
        $question_id = $request["question-id"];
        $user_choice_id = $request["answer"];
        $correct_choice_id = Answer::where('question_id', '=', $question_id)
                                        ->where('is_true', '=', 1)->first()->id;

        $count_qestion = Question::count(); 

        if($user_choice_id == $correct_choice_id)
        {
            $user_score = Session::get("user_score");
            $user_score++;
            $user_score = Session::put("user_score", $user_score);
        }
        $question_id++;
        $quiz_index = Session::get("quiz_index");
        $quiz_index++;
        $quiz_index = Session::put("quiz_index", $quiz_index);

        if($question_id > $count_qestion)
        {
        //    header("Location: final.php");
           return redirect("/final");
        }
        else
        {
            return redirect("/qestion/$question_id");
        }

        // return redirect("/qestion/$question_id");
    }
}
