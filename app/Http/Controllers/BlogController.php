<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function blog()
    {
        $dataq = BlogModel::all();
        return view('blog', compact('dataq'));
    }

    public function blogDetails($id)
    {
        $Anotherblog = BlogModel::orderBy('created_at', 'desc')->take(4)->get();

        $blogs = BlogModel::findOrFail($id);
        return view('blog-details', compact('blogs', 'Anotherblog'));
    }

}
