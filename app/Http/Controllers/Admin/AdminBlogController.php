<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'date' => 'required|date',
            'excerpt' => 'required|string',
            'content' => 'required|string',
        ]);

        Post::create($request->all());
        return redirect()->route('admin.blog.index')->with('success', 'مقاله با موفقیت اضافه شد.');
    }

    public function edit(Post $post)
    {
        return view('admin.blog.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'date' => 'required|date',
            'excerpt' => 'required|string',
            'content' => 'required|string',
        ]);

        $post->update($request->all());
        return redirect()->route('admin.blog.index')->with('success', 'مقاله با موفقیت به‌روزرسانی شد.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.blog.index')->with('success', 'مقاله با موفقیت حذف شد.');
    }
}