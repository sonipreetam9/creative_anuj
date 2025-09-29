<?php

namespace App\Http\Controllers;
use App\Models\AboutModel;
use App\Models\ServiceModel;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    public function index()
    {
        $abouts = AboutModel::all();
        $services = ServiceModel::orderBy('id', 'ASC')->get();
        return view('index', compact('abouts', 'services'));
    }

    public function coming_soon()
    {
        return view('coming_soon');
    }

}
