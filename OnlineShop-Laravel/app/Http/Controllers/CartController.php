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

    function user_get()
    {
        $carts = Auth::user()->carts;
        return view('client/cart')->with([
            "carts" => $carts
        ]);
    }

    function add(Request $request)
    {

        $carts = Cart::where("user_id", "=", Auth::id())->where("product_id", "=", $request["product_id"]);
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
            return "شما قبلا این کالا را به سبد خرید خود اضافه کرده اید";
        }
    }

    // function delete_order(Request $request)
    // {
    //     $carts = Cart::where("id", "=", $request["cart_id"])->where("user_id", "=", Auth::id());
    //     $cart = $carts->first();
    //     $cart->delete();

    //     $new_counts = Auth::user()->carts;
    //     return $new_counts;
    // }

    function add_count(Request $request)
    {
        $carts = Cart::where("id", "=", $request["cart_id"])->where("user_id", "=", Auth::id());
        $cart = $carts->first();
        $cart->count = $cart->count + 1;
        $cart->update();
        return $cart->count;
    }

    function minus_count(Request $request)
    {
        $carts = Cart::where("id", "=", $request["cart_id"])->where("user_id", "=", Auth::id());
        $cart = $carts->first();
        if($cart->count > 1){
            $cart->count = $cart->count - 1;
            $cart->update();
        }
        return $cart->count;
    }

    }

