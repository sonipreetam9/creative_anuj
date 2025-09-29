<?php

namespace App\Http\Controllers;

use App\Models\ServiceModel;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Show services list page
    public function service()
    {
        $services = ServiceModel::orderBy('id', 'ASC')->get();
        return view('services', compact('services'));
    }

    // Show single service detail page
    public function serviceDetail($id)
    {
        $service = ServiceModel::findOrFail($id);
        return view('service-detail', compact('service'));
    }
}
