<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    function get_all()
    {
        $carts = Cart::all();

        return view("admin/carts", [
            "carts" => $carts,
        ]);
    }

    function get()
    {
        $carts = Auth::user()->carts();
        return view('client/cart')->with([
            "carts" => $carts
        ]);
    }

    function add(Request $request)
    {
        $carts = Cart::where("user_id", "=", Auth::id())->where("product_id", "=", $request["product_id"]);
        // $user_id = $request->session()->get('user_id');  
        // $count = Star::where('product_id', $request["product_id"]);
        if($carts->count() == 0) 
        {
            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->product_id = $request["product_id"];
            // $star->score = $request["score"];
            $cart->save();
            return "کالای موردنظر شما در سبد خرید افزوده گردید";
        }

        else 
        {
            // $cart = $stars->first();
            // $cart->score = $request["score"];
            // $cart->update();
            // $db->query("DELETE FROM likes WHERE post_id = $post_id AND user_id = $user_id");
            // echo "0";
            return "شما قبلا این کالا را به سبد خرید خود اضافه کرده اید";
        }
        // return "ok";
        // return $request["score"];
    }

    function edit()
    {

    }

    function delete()
    {
        
    }
}
