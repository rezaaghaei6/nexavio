<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Display the homepage.
     */
    public function index()
    {
        $services = Service::all();
        $portfolios = Portfolio::all();
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();

        return view('pages.home', compact('services', 'portfolios', 'posts'));
    }
}