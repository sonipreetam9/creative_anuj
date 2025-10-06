<?php

namespace App\Http\Controllers;

use App\Models\PortfolioHeadingModel;
use App\Models\PortfolioModel;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio($id)
    {
        $portfolioheadings = PortfolioHeadingModel::all();
        $heading = PortfolioHeadingModel::findOrFail($id);
        $portfolios = PortfolioModel::where('portfolio_id', $id)->get();

        return view('portfolio', compact('portfolioheadings', 'heading', 'portfolios'));
    }
}
