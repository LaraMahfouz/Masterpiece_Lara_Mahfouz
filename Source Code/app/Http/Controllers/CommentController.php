<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Request $request, Post $post)
    {
        // dd($post);
        // $cat = Session::get('cat');
        $user_id = auth()->user()->id;
        $user_name = auth()->user()->name;
        $user_image = auth()->user()->user_image;
        $post_id = $post->id;
        Comment::create([
            "user_id"              => $user_id,
            "user_name"            => $user_name,
            "user_image"           => $user_image,
            "post_id"              => $post_id,
            "comment"              => $request->comment,


        ]);
        return redirect("/single/$post_id");
    }
}
