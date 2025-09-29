<?php

namespace App\Http\Controllers;
use App\Models\AboutModel;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $abouts = AboutModel::all();
        return view('about', compact('abouts'));
    }

}
