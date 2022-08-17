<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Star;

class ProductController extends Controller
{
    function index_product($id)
    {
            $product = Product::find($id);
            $comments = Comment::all();
            return view("product",[
                "product" => $product,
            ]);
    }
    function get_all_for_client()
    {
        $products = Product::paginate(1);
        return view("products", [
            "products" => $products,
        ]);
    }
    function get_all_for_admin()
    {
        $products = Product::all();
        return view("admin/products", [
            "products" => $products,
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
    function add_get()
    {
        $categories = Category::all();
        return view("admin/add_product")->with([
            "categories" => $categories,
        ]);
    }

    function add_post(Request $request)
    {
        $new_product= new Product();
        $new_product->name = $request["name"];
        $new_product->description = $request["text"];
        $new_product->price = $request["price"];
        $new_product->price_off = $request["price_off"];
        $new_product->count = $request["count"];
        $new_product->category_id = $request["category_id"];
        $new_product->save();

        $new_image = new Image();
        $new_image->image = $request["image"];
        $new_product->images()->save($new_image);

        return redirect("/admin/products");
    }

    function get_by_category($category_id)
    {
        
    }

    function search()
    {
        
    }
}
