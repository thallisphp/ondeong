<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Home do site
     *
     * @Get("/")
     */
    public function getIndex()
    {
        return view('frontend.paginas.home');
    }
}
