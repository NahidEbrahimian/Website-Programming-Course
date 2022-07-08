<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Question;

class HomeController extends Controller
{
    function index()
    {
        Session::put("user_score", 0);
        Session::put("quiz_index", 1);
        $count_qestion = Question::count();  
        return view("index", [
            "count_qestion" => $count_qestion,
        ]);
    }
}
