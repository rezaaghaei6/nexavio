<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->query('category_id');
        $posts = $categoryId
            ? Post::where('category_id', $categoryId)->with('category')->get()
            : Post::with('category')->get();
        $categories = Category::all();

        return view('pages.blog.index', compact('posts', 'categories'));
    }

    public function show(Post $post)
    {
        $post->load('category');
        return view('pages.blog.show', compact('post'));
    }
}