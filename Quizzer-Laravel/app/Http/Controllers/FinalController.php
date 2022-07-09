<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Session;

class FinalController extends Controller
{
    function index()
    {
        $num_qestion = Question::count();
        // $num_quizes = $db->query("SELECT * FROM questions");
        // $num_quizes = $num_quizes->num_rows;
        $score = Session::get("user_score") / $num_qestion  * 100;
        // $score = ($_SESSION["user_score"] / $num_qestion ) * 100;
        return view("final", [
            "score" => $score,
            "num_qestion" => $num_qestion
        ]);
    }
}
