<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function get_all()
    {
        $users = User::all();

        return view("admin/users", [
            "users" => $users,
        ]);
    }
    function sign_up()
    {
        
    }

    function sign_in()
    {

    }

    function log_out()
    {

    }

    function edit_profile()
    {

    }

    function reset_password()
    {
        
    }
}
