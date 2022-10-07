<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function register_get()
    {
        return view("user_register");
    }
    function login_post(Request $request)
    {
        $this->validate($request,[
            'password' => 'required|min:6',
            'confirm-password' => 'same:password'
        ]);
       
        $new_user = new User();
        $new_user->name = $request['name'];
        $new_user->phone_number = $request['phone_number'];
        $new_user->email = $request['email'];
        // $new_user->city_id = $request['city'];
        // $new_user->address = $request['address'];
        // $new_user->gender = $request["gender"];
        $new_user->password = bcrypt($request['password']);
        $new_user->save();

        return redirect("/");
    }

}
