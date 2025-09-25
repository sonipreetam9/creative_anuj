<?php

namespace App\Http\Controllers;
use App\Models\AboutModel;

use Illuminate\Http\Request;

class AdminAboutController extends Controller
{


    public function AdminAbout()
    {
        $about = AboutModel::all();
        return view('admin.about', compact('about'));
    }

    public function AdminAboutPost(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'short_description' => 'required|string|max:500',
            'long_description' => 'required|string',
        ]);

        // Handle the image upload if an image is provided
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $validatedData['image'] = $imageName;
        }

        // Save the data to the database
        AboutModel::create($validatedData);

        return redirect()->back()->with('success', 'About information updated successfully.');
    }


    public function AdminAboutUpdatePage($id)
    {
        $data = AboutModel::findOrFail($id);
        return view('admin.edit-about', compact('data'));
    }

    public function AdminAboutUpdate(Request $request, $id)
    {

        $about = AboutModel::findOrFail($id);
        if ($request->hasFile('image')) {
            $file_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads'), $file_name);
            $about->image = $file_name;
        }
        $about->title = $request->title;
        $about->short_description = $request->short_description;
        $about->long_description = $request->long_description;
        $about->save();

        // Redirect back with success message
        return redirect()->route('admin.about')->with('success', 'About Content updated successfully!');
    }

    public function AdminAboutDelete($id)
    {
        $about = AboutModel::findOrFail($id);
        $about->delete();

        return redirect()->back()->with('success', 'About Content deleted successfully!');
    }



}
