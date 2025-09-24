<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

    public function coming_soon()
    {
        return view('coming_soon');
    }

}
