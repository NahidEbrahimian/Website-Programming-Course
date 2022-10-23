<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Color;
use App\Models\Car;
use App\Models\Taxi_request;
use App\Models\Active_driver;

class UserController extends Controller
{
    function login_post(Request $request)
    {
        if(Auth::attempt(["phone_number"=>$request['user_name'], "password"=>$request['password'], "role"=>"0"])){
            $phone_number = $request['user_name'];
            $user_id = User::where("phone_number", $phone_number)->first()->id;
            return redirect("/user_profile");
        }
        else{
            return redirect("/");
        }
    }
    function user_profile()
    {
        $drivers = User::where("role", "=", "1")->where("active", "=", "1");
        return view("user_profile")->with([
            "drivers" => $drivers
        ]);
    }
    function register_get()
    {
        return view("user_register");
    }
    function register_post(Request $request)
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

    function driver_login_get(){
        return view("driver_login");
    }

    function driver_login_post(Request $request){
        if(Auth::attempt(["national_number"=>$request['user_name'], "password"=>$request['password'], "role"=>"1"])){
            $national_number = $request['user_name'];
            $user_id = User::where("national_number", $national_number)->first()->id;
            
            return redirect("/driver_profile");
        }
        else{
            return redirect("driver_login");
        }
    }
    function driver_profile()
    {
        // $drivers = User::where("role", "=", "1")->where("active", "=", "1");
        // $requests = Taxi_request::where("accept", "=", "0");
        $requests = Taxi_request::all();
        return view("driver_profile")->with([
            "requests" => $requests,
        ]); 
    }
    function driver_register_get()
    {
        $colors = Color::all();
        return view("driver_register")->with([
            "colors" => $colors,
        ]);
    }
    function driver_register_post(Request $request)
    {
        $this->validate($request,[
            'password' => 'required|min:6',
            'confirm-password' => 'same:password',
            // 'national_number' => 'required|unique:national_number',
        ]);
        $new_user = new User();
        $new_user->name = $request['name'];
        $new_user->phone_number = $request['phone_number'];
        $new_user->email = $request['email'];
        $new_user->national_number = $request['national_number'];
        $new_user->role = 1;
        // $new_user->city_id = $request['city'];
        // $new_user->address = $request['address'];
        // $new_user->gender = $request["gender"];
        $new_user->password = bcrypt($request['password']);
        $new_user->save();

        $new_car = new Car();
        $new_car->name = $request["car_name"];
        $new_car->pelak = $request["pelak"];
        $new_car->color_id = $request["color_id"];
        // $new_car->car_image = $request["car_image"];
        $new_user->cars()->save($new_car);
        return redirect("/driver_login");
    }

    function logout()
    {
        Auth::logout();
        return redirect("/");
    }
    
    function request_taxi(Request $request)
    {
        $new_request = new Taxi_request();
        $new_request->user_id = Auth::id();
        $new_request->lat_start = $request['lat_start'];
        $new_request->lng_start = $request['lng_start'];
        $new_request->lat_end = $request['lat_end'];
        $new_request->lng_end = $request['lng_end'];
        $new_request->price = $request['price'];

        $new_request->save();
        // return redirect("/user_profile");
    }

}
