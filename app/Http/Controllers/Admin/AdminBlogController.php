<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
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
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'مقاله با موفقیت ایجاد شد.');
    }

    public function edit(Post $post)
    {
        return view('admin.blog.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'مقاله با موفقیت به‌روزرسانی شد.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.blog.index')->with('success', 'مقاله با موفقیت حذف شد.');
    }
}