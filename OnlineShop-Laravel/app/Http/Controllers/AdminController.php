<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        $categories = Category::all();
        return view("admin.index",[
            "categories"=>$categories,
        ]);
    }

    function logout()
    {
        Auth::logout();
        return redirect("/");
    }
}
