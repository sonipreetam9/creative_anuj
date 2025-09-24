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


    public function AdminAboutEdit($id)
    {
        $about = AboutModel::find($id);
        if ($about) {
            return view('admin.edit-about', compact('about'));
        }
        return redirect()->back()->with('error', 'About information not found.');
    }

    public function AdminAboutDelete($id)
    {
        $about = AboutModel::find($id);
        if ($about) {
            if ($about->image && file_exists(public_path('uploads/' . $about->image))) {
                unlink(public_path('uploads/' . $about->image));
            }
            $about->delete();
            return redirect()->back()->with('success', 'About information deleted successfully.');
        }
        return redirect()->back()->with('error', 'About information not found.');
    }



}
