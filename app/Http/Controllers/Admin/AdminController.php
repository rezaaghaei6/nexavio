<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $services_count = Service::count();
        $portfolios_count = Portfolio::count();
        $posts_count = Post::count();

        return view('admin.dashboard', compact('services_count', 'portfolios_count', 'posts_count'));
    }
    public function logs()
{
    $logs = \App\Models\AdminLog::latest()->paginate(20);
    return view('admin.logs.index', compact('logs'));
}
}

