<?php

namespace App\Http\Controllers;

use App\Models\ServiceModel;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    public function AdminServiceIndex()
    {
        return view('admin.add_service');
    }


    public function AdminServicePost(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'short_description' => 'required|string|max:500',
            'long_description' => 'required|string',
            'meta_title' => 'required|string',
            'meta_description' => 'required|string',
            'meta_keyword' => 'required|string',
        ]);

        // Handle the image upload if an image is provided
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $validatedData['image'] = $imageName;
        }

        $validatedData['long_description'] = base64_encode($request->long_description);

        // Save the data to the database
        ServiceModel::create($validatedData);

        return redirect()->back()->with('success', 'Service added Successfully.');
    }


    public function AdminAllService()
    {
        $services = ServiceModel::all();
        return view('admin.all_services', compact('services'));
    }

    public function AdminServiceUpdate($id)
    {
        $data = ServiceModel::findOrFail($id);
        return view('admin.edit_service', compact('data'));
    }

    public function AdminServiceUpdatePost(Request $request, $id)
    {

        $service = ServiceModel::findOrFail($id);
        if ($request->hasFile('image')) {
            $file_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads'), $file_name);
            $service->image = $file_name;
        }
        $service->title = $request->title;
        $service->short_description = $request->short_description;
        $service->long_description = base64_encode($request->long_description);
        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        $service->meta_keyword = $request->meta_keyword;
        $service->save();

        return redirect()->back()->with('success', 'Service updated successfully.');
    }

    public function AdminServiceDelete($id)
    {
        $service = ServiceModel::findOrFail($id);
        $service->delete();

        return redirect()->back()->with('success', 'Service deleted successfully.');
    }

}







