<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    function add()
    {

    }

    function edit()
    {

    }

    function delete()
    {
        
    }
}
