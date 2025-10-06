<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioHeadingModel;
use App\Models\PortfolioModel;

class AdminPortfolioController extends Controller
{
    public function AdminPortfolioHeading()
    {
        $portfolio = PortfolioHeadingModel::all();
        return view('admin.portfolio_heading', compact('portfolio'));

    }

    public function AdminPortfolioHeadingCreate(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $title = $request->input('title');

        $portfolioHeading = new PortfolioHeadingModel();
        $portfolioHeading->title = $title;
        $portfolioHeading->save();

        return redirect()->back()->with('success', 'Portfolio heading added successfully!');
    }

    public function AdminPortfolioHeadingUpdate(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
        ]);

        $portfolioHeading = PortfolioHeadingModel::findOrFail($id);
        $portfolioHeading->title = $request->input('title');
        $portfolioHeading->save();

        return redirect()->back()->with('success', 'Portfolio heading updated successfully!');
    }

    public function AdminPortfolioHeadingDelete($id)
    {
        $portfolioHeading = PortfolioHeadingModel::findOrFail($id);
        $portfolioHeading->delete();

        return redirect()->back()->with('success', 'Portfolio heading deleted successfully!');
    }


    public function AdminPortfolioIndex()
    {
        $headings = PortfolioHeadingModel::all();
        return view('admin.add_portfolio', compact('headings'));
    }

    public function AdminPortfolioPost(Request $request)
    {
        $validate = $request->validate([
            'portfolio_id' => 'required|string',
            'title' => 'required|max:255',
            'url' => 'required|url',
            'image' => 'required|image',

        ]);

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $fileName);
            $validate['image'] = $fileName;
        }

        PortfolioModel::create($validate);

        return redirect()->back()->with('success', 'Portfolio Created Successfully');

    }

    public function AdminPortfolioList()
    {
        $portfolioList = PortfolioModel::all();
        return view('admin.all_portfolio', compact('portfolioList'));
    }

    public function AdminPortfolioEditIndex($id)
    {
        $EditPortfolio = PortfolioModel::findOrFail($id);
        // dd($EditPortfolio);
        $portfolioHeading = PortfolioHeadingModel::all();
        return view('admin.edit-portfolio', compact('EditPortfolio', 'portfolioHeading'));
    }

    public function 
    AdminPortfolioEdit(Request $request, $id)
    {
        $portfolio = PortfolioModel::findOrFail($id);
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads'), $fileName);
            $portfolio->image = $fileName;
        }

        $portfolio->title = $request->title;
        $portfolio->url = $request->url;
        $portfolio->save();

        return redirect()->back()->with('success', 'Portfolio Update Successfully');

    }

    public function AdminPortfolioDelete($id)
    {
        $portfolioDelete = PortfolioModel::findOrFail($id);
        $portfolioDelete->delete();
        return redirect()->back()->with('success', 'Portfolio Delete Succesfully');

    }

}
