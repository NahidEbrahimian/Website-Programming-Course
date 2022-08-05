<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\City;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function get_all()
    {
        $users = User::all();

        return view("admin.users", [
            "users" => $users,
        ]);
    }
    function registere_get()
    {
        $categories = Category::all();
        $cities = City::all();

        return view("client.registere",[
            "categories"=>$categories,
            "cities" => $cities
        ]);
    }
    function registere_post(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|unique:users',
            'name' => 'required|max:120',
            'user_name' => 'required|unique:users', 
            'password' => 'required|min:6',
            'confirm-password' => 'same:password'
        ]);
       
        $new_user = new User();
        $new_user->name = $request['name'];
        $new_user->user_name = $request['user_name'];
        $new_user->mobile_number = $request['mobile-number'];
        $new_user->email = $request['email'];
        $new_user->city_id = $request['city'];
        $new_user->address = $request['address'];
        $new_user->password = bcrypt($request['password']);
        $new_user->role = 0;
        $new_user->save();

        return redirect("client/login");
    }
    function login_get()
    {
        $categories = Category::all();

        return view("client.login",[
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
            return redirect('admin');
        }
        elseif(Auth::attempt(["email"=>$request['user_name'], "password"=>$request['password'], "role"=>0]) ||
        Auth::attempt(["mobile_number"=>$request['user_name'], "password"=>$request['password'], "role"=>0]) ||
        Auth::attempt(["user_name"=>$request['user_name'], "password"=>$request['password'], "role"=>0]))
        {
            return redirect('client/user_profile')->with([
                "categories"=>$categories,
            ]);
            
        }
        else
        {
            return redirect('client/login')->with([
                "categories"=>$categories,
            ]);
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect("/");
    }
    function profile()
    {
        $categories = Category::all();
        return view('client.user_profile',[
            "categories"=>$categories,
        ]);
    }

    function reset_password()
    {
        
    }
}
