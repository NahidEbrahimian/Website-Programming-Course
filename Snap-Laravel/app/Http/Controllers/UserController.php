<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function login_post(Request $request)
    {

    }
    function register_get()
    {
        return view("user_register");
    }
}
