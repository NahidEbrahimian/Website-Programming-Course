<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Star;

class ProductController extends Controller
{
    // function index_product(Request $request)
    function index_product()
    {
        // $product_id = $request->id;
        $categories = Category::all();
        $product = Product::join('images', 'products.id', '=', 'images.product_id')
                            ->join('stars', 'products.id', '=', 'stars.product_id')
                            // ->join('categories', 'categories.id', '=', 'products.category_id')
                            ->get(['products.*','images.image','stars.score'])->where('id', '=', 1);
    
        return view("product",[
            "categories"=>$categories,
            "product"=>$product
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
