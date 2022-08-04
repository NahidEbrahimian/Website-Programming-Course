<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    function get_all()
    {
        $comments = Comment::all();

        return view("admin/comments", [
            "comments" => $comments,
        ]);
    }
    function delete($id)
    {
        $comment = Comment::find($id);
        if(!$comment)
        {
            $message = "پیدا نشد";
            $message_type = "danger";
        }
        else
        {
            $comment->delete();
            $message = "با موفقیت حذف شد";
            $message_type = "success";
        }
        
        return redirect("admin/comments")->with([
            "message" => $message,
            "message_type" => $message_type,
        ]);
    }

    function send()
    {

    }

    function display_all()
    {
        
    }
}
