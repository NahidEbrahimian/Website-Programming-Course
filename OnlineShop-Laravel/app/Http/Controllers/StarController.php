<?php

namespace App\Http\Controllers;

use App\Models\Star;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StarController extends Controller
{
    function send_rating(Request $request)
    {
        if(Auth::check()) // باید اصلاح بشه
        {
            $stars = Star::where("user_id", "=", Auth::id())->where("product_id", "=", $request["product_id"]);
            // $user_id = $request->session()->get('user_id');  
            // $count = Star::where('product_id', $request["product_id"]);
            if($stars->count() == 0) 
            {
                $star = new Star();
                $star->user_id = Auth::id();
                $star->product_id = $request["product_id"];
                $star->score = $request["score"];
                $star->save();
            }
    
            else 
            {
                $star = $stars->first();
                $star->score = $request["score"];
                $star->update();
                // $db->query("DELETE FROM likes WHERE post_id = $post_id AND user_id = $user_id");
                // echo "0";
            }
            // return "ok";
            // ;
            // echo gettype(($request["score"]));
            return $request["score"];
            // return "1";
        }
        else{
            return "0";
        }
        
    }
}
