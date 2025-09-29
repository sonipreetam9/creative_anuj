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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'short_description' => 'required|string|max:500',
            'long_description' => 'required|string',
        ]);

        // Handle the image upload if an image is provided
        if ($request->hasFile('image')) {
            $imageName = time() . '_1.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $validatedData['image'] = $imageName;
        }

        if ($request->hasFile('image2')) {
            $imageName2 = time() . '_2.' . $request->image2->extension();
            $request->image2->move(public_path('uploads'), $imageName2);
            $validatedData['image2'] = $imageName2;
        }

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

        // Handle image 1
        if ($request->hasFile('image')) {
            $imageName = time() . '_1.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $about->image = $imageName; // assign to model
        }

        // Handle image 2
        if ($request->hasFile('image2')) {
            $imageName2 = time() . '_2.' . $request->image2->extension();
            $request->image2->move(public_path('uploads'), $imageName2);
            $about->image2 = $imageName2; // assign to model
        }

        // Update text fields
        $about->title = $request->title;
        $about->short_description = $request->short_description;
        $about->long_description = $request->long_description;

        // Save changes
        $about->save();

        return redirect()->route('admin.about')->with('success', 'About Content updated successfully!');
    }

    public function AdminAboutDelete($id)
    {
        $about = AboutModel::findOrFail($id);
        $about->delete();

        return redirect()->back()->with('success', 'About Content deleted successfully!');
    }



}
