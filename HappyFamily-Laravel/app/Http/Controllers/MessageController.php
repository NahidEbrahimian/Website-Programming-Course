<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    function index()
    {
        $messages = Message::all();
        return view("index", [
            "messages" => $messages
        ]);
    }

    function add(Request $request)
    {
        echo "1";
        $message = new Message();
        $message ->name = $request["name"];
        $message ->text = $request["text"];
        $message->save();
        echo "2";

        return redirect()->to('/');
    }
}
