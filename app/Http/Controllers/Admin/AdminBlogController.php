<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->get();
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.blog.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        Post::create($request->all());

        return redirect()->route('admin.blog.index')->with('success', 'مقاله با موفقیت ایجاد شد.');
    }

    public function show(Post $post)
    {
        $post->load('category');
        return view('admin.blog.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.blog.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $post->update($request->all());

        return redirect()->route('admin.blog.index')->with('success', 'مقاله با موفقیت ویرایش شد.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.blog.index')->with('success', 'مقاله با موفقیت حذف شد.');
    }
}