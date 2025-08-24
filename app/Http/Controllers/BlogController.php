<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('pages.blog.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('pages.blog.show', compact('post'));
    }
}