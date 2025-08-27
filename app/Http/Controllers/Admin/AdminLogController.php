<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminLog;

class AdminLogController extends Controller
{
    public function index()
    {
        $logs = AdminLog::latest()->paginate(50); // آخرین 50 لاگ
        return view('admin.logs.index', compact('logs'));
    }
}
