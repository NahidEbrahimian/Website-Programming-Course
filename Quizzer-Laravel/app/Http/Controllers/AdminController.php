<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;

class AdminController extends Controller
{
    function index()
    {
        return view("admin");
    }
    function add_question(Request $request)
    {
        # Add qestion
        $qestion = new Question();
        $qestion ->text =  $request["qestion-text"];
        $qestion->save();

        # Add Answers
        $qestion_id = Question::all()->last()->id;
        $true_answer_index = $request["true-answer"];

        foreach ($request["answer"] as $i => $answer)
        {
            $answers = new Answer();
            echo $i;
            if($i+1 == $true_answer_index)
            {
                $is_true = 1;
            }
            else
            {
                $is_true = 0;
            }
            
            $answers -> text=$answer;
            $answers -> is_true=$is_true;
            $answers -> question_id=$qestion_id;
            $answers->save();
        }
        return redirect("/");
    }
}
