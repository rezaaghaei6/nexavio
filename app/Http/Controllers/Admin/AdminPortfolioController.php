<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class AdminPortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'description' => 'required|string',
            'tags' => 'required|string',
        ]);

        $data = $request->all();
        $data['tags'] = explode(',', $request->tags);

        Portfolio::create($data);
        return redirect()->route('admin.portfolio.index')->with('success', 'نمونه‌کار با موفقیت اضافه شد.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'description' => 'required|string',
            'tags' => 'required|string',
        ]);

        $data = $request->all();
        $data['tags'] = explode(',', $request->tags);

        $portfolio->update($data);
        return redirect()->route('admin.portfolio.index')->with('success', 'نمونه‌کار با موفقیت به‌روزرسانی شد.');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('admin.portfolio.index')->with('success', 'نمونه‌کار با موفقیت حذف شد.');
    }
}