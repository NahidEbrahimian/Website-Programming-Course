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
    function get_all()
    {
        $products = Product::all();
        $categories = Category::all();

        return view("admin/products", [
            "products" => $products,
            "categories" => $categories
        ]);
    }
    function delete($id)
    {
        $product = Product::find($id);
        if(!$product)
        {
            $message = "پیدا نشد";
            $message_type = "danger";
        }
        else
        {
            $product->delete();
            $message = "با موفقیت حذف شد";
            $message_type = "success";
        }
        
        return redirect("admin/products")->with([
            "message" => $message,
            "message_type" => $message_type,
        ]);
    }
    function add()
    {

    }

    function edit()
    {
        
    }

    function get_by_category($category_id)
    {
        
    }

    function search()
    {
        
    }
}
