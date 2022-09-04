<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\City;
// use App\Models\Cart;
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
        $cities = City::all();

        return view("client.registere",[
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
        return view("client.login");
    }
    function login_post(Request $request)
    {
        echo $request["remember_me"];

        if(Auth::attempt(["email"=>$request['user_name'], "password"=>$request['password'], "role"=>0], $request['remember_me']) ||
        Auth::attempt(["mobile_number"=>$request['user_name'], "password"=>$request['password'], "role"=>0], $request["remember_me"]) ||
        Auth::attempt(["user_name"=>$request['user_name'], "password"=>$request['password'], "role"=>0], $request["remember_me"]))
        {

            $user_name = $request['user_name'];
            // $user_id = User::where("password", $request['password'])->where("role", 0)->where(function($query) use ($user_name) {
            //                 $query->where("mobile_number", $user_name)
            //                 ->orWhere("user_name", $user_name)
            //                 ->orWhere("email", $user_name);
            //                 })->first()->id;

            $user_id = User::where("user_name", $user_name)->first()->id;

            // $user_id = User::where("email", $request['user_name'])->where("password"=$request['password'])->where("role", 0)
            //                 ->orWhere("mobile_number"=$request['user_name'], "password"=$request['password'], "role"=0)
            //                 ->orWhere("user_name"=$request['user_name'], "password"=$request['password'], "role"=0)->get();
            $request->session()->put('user_id', $user_id);
            // $id = $request->session()->get('user_id');           
            // echo $id;
            // $carts = Cart
            return redirect('client/user_profile');
        }
        else
        {
            return redirect('client/login');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect("/");
    }
    function profile()
    {
        return view('client.user_profile');
    }

    function reset_password()
    {
        
    }
}
