<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index');
    }

    public function show($locale)
    {
        \Session::put('locale', $locale);
        return view('portfolio.show');
    }
}
