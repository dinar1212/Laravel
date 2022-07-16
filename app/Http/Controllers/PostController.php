<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
//memanggil moddel post
use App\Models\Post;

class PostController extends Controller
{
    public function tampil()
    {
        $post = Post::all();
        return view('post.index', compact('post'));
    }
}
