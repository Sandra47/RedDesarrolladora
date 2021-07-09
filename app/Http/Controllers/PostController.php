<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\comments;

class PostController extends Controller
{
    //
    public function post(Post $post){
        return view('post',compact('post'));
        
    }
    
}
