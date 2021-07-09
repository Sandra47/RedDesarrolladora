<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    //

    // public function __construct() {
    //     $this->middleware('auth');
    // }
 
    public function store(Request $request, Post $post)
    {
        $this->validate($request, [
        
            'content' => 'required',
           

        ]); 
        $comment = new comments();
        $comment->content = $request->content;
        // $comment->parent_id = $request->parent_id;
        $comment->user_id = \auth()->id();
        $comment->post_id = $post->id;

 
        $post->comments()->save($comment);
 
        return \redirect()->route('post', $post);
    }
}