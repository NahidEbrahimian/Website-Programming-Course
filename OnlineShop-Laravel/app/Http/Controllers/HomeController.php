<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Star;

class HomeController extends Controller
{

    function index()
    {
        $products = Product::all();
        // $products = Product::join('images', 'products.id', '=', 'images.product_id')
        //                     ->join('stars', 'products.id', '=', 'stars.product_id')->get(['products.*','images.image','stars.score']);
    
        return view("index",[
            "products"=>$products
        ]);
    }
}
