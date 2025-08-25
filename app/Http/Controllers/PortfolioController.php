<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the portfolio items.
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('pages.portfolio', compact('portfolios'));
    }

    /**
     * Display the specified portfolio item.
     */
    public function show(Portfolio $portfolio)
    {
        return view('pages.portfolio', compact('portfolio'));
    }
}