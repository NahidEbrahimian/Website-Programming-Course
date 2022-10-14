<?php

namespace App\Http\Controllers;
use App\Models\Driver;
use App\Models\Color;
use App\Models\Car;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    function driver_login_get(){
        return view("driver_login");
    }

    function driver_login_post(Request $request){
        return view("user_profile");    
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
        $new_user = new Driver();
        $new_user->name = $request['name'];
        $new_user->phone_number = $request['phone_number'];
        $new_user->email = $request['email'];
        $new_user->national_number = $request['national_number'];
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
}
