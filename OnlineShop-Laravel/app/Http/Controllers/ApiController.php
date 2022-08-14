<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function get_products()
    {
        $products = Product::all(); 
        return response()->json($products, 200, ['Content-type'=>'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);   
     }

     function get_categories()
     {
        $categories = Category::all(); 
        return response()->json($categories, 200, ['Content-type'=>'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);   
     }
}
