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
    function login_get()
    {
        $categories = Category::all();

        return view("admin.login",[
            "categories"=>$categories,
        ]);
    }
    function login_post(Request $request)
    {
        $categories = Category::all();

        if(Auth::attempt(["email"=>$request['user_name'], "password"=>$request['password'], "role"=>1]) ||
        Auth::attempt(["mobile_number"=>$request['user_name'], "password"=>$request['password'], "role"=>1]) ||
        Auth::attempt(["user_name"=>$request['user_name'], "password"=>$request['password'], "role"=>1]))
        {
            return redirect('/admin')->with([
                "categories"=>$categories,
            ]);
            
        }
        else
        {
            return redirect('admin/login')->with([
                "categories"=>$categories,
            ]);
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect("/");
    }
}
