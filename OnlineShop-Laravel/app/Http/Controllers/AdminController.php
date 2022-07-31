<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    function index()
    {
        $categories = Category::all();
        return view("admin.index",[
            "categories"=>$categories,
        ]);
    }

    function sign_in()
    {

    }

    function log_out()
    {

    }
}
