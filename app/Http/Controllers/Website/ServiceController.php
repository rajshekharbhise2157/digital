<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        return view('Website.services.index');
    }
}