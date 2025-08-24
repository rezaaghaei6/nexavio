<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $stats = [
            ['number' => '50+', 'label' => 'پروژه موفق'],
            ['number' => '25+', 'label' => 'مشتری راضی'],
            ['number' => '3+', 'label' => 'سال تجربه'],
            ['number' => '100%', 'label' => 'رضایت مشتریان'],
        ];
        $services = Service::all();
        $portfolios = Portfolio::all();
        $posts = Post::latest()->take(3)->get();
        return view('pages.home', compact('stats', 'services', 'portfolios', 'posts'));
    }
}