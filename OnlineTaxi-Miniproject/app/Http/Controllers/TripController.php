<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxi_request;
use App\Models\Trip;

class TripController extends Controller
{
    //
    function accept_request(Request $request)
    {
        // $carts = Cart::where("user_id", "=", Auth::id())->where("product_id", "=", $request["product_id"]);
        // if($carts->count() == 0) 
        // {
            $trip = new Trip();
            $trip->taxi_request_id = $request["request_id"];
            $trip->save();
            return "درخواست شما ثبت گردید.";
        // }

        // else 
        // {
        //     return "شما قبلا این کالا را به سبد خرید خود اضافه کرده اید";
        // }
    }
}
