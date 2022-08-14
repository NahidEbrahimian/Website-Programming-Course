<?php

namespace App\Http\Controllers;

use App\Models\Star;
use Illuminate\Http\Request;

class StarController extends Controller
{
    function send_rating(Request $request)
    {
        $count = Star::where()
        if($count == 0) 
        {
            $star = new Star();
            $star->user_id = 
            $star->product_id = $request["user_id"];
            $star->score = $request["score"];
            $star.save();
            echo "1";
        }
        else 
        {
            $star->score = 
            $star->update();
            // $db->query("DELETE FROM likes WHERE post_id = $post_id AND user_id = $user_id");
            echo "0";
        }
    }
}
