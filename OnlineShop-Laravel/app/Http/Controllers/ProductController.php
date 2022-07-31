<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Star;

class ProductController extends Controller
{
    // function index_product(Request $request)
    function index_product($id)
    {
            $product = Product::find($id);
            $categories = Category::all();

            return view("product",[
                "product" => $product,
                "categories"=>$categories
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

    function get_all()
    {
        
    }

    function get_by_category($category_id)
    {
        
    }

    function search()
    {
        
    }
}
