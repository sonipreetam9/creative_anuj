<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioModel;

class AdminPortfolioController extends Controller
{
    public function AdminPortfolioHeading()
    {
        $portfolio = PortfolioModel::all();
        return view('admin.portfolio_heading', compact('portfolio'));

    }

    public function AdminPortfolioHeadingCreate(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $title = $request->input('title');

        $portfolioHeading = new PortfolioModel();
        $portfolioHeading->title = $title;
        $portfolioHeading->save();

        return redirect()->back()->with('success', 'Portfolio heading added successfully!');
    }

    public function AdminPortfolioHeadingUpdate(Request $request, $id)

    {

        $request->validate([
            'title' => 'required',
        ]);

        $portfolioHeading = PortfolioModel::findOrFail($id);
        $portfolioHeading->title = $request->input('title');
        $portfolioHeading->save();

        return redirect()->back()->with('success', 'Portfolio heading updated successfully!');
    }

    public function AdminPortfolioHeadingDelete($id)
    {
        $portfolioHeading = PortfolioModel::findOrFail($id);
        $portfolioHeading->delete();

        return redirect()->back()->with('success', 'Portfolio heading deleted successfully!');
    }


    public function AdminPortfolioIndex()
    {
        return view('admin.add_portfolio');
    }


}
