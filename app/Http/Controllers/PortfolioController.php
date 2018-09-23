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
        // In case of receiving invalid locale, redirect to English locale.
        if (!in_array($locale, \Config::get('constants.locale'), true)) {
            return redirect()->action(
                'PortfolioController@show', [
                    'locale' => \Config::get('constants.locale.en')
                ]
            );
        }
        \App::setLocale($locale);

        return view('portfolio.show');
    }
}
