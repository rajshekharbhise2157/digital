<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Website Home Page
     */
    public function index()
    {
        return view('Website.home.index');
    }
}