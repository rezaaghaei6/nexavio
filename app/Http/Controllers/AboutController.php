<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::query()->where('is_active', true)->latest()->get();
        return view('pages.about', compact('teamMembers'));
    }
}