<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    function HomePage()
    {
        return Inertia::render('Home')->withViewData(['title' => 'Home Page']);
    }

    function ProductPage()
    {
        return Inertia::render('Product')->withViewData(['title' => 'Product Page']);
    }
}
