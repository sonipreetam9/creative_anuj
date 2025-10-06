<?php

namespace App\Http\Controllers;
use App\Models\BlogModel;

use Illuminate\Http\Request;

class AdminBlogController extends Controller
{

    public function AdminBlogIndex()
    {
        return view('admin.add_blog');
    }
    public function AdminAllBlog()
    {
        $blogs = BlogModel::all();
        return view('admin.all_blogs', compact('blogs'));
    }

    public function AdminBlogCreate(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'long_description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $validation['image'] = $imageName;
        }

        $validation['long_description'] = base64_encode($request->long_description);

        BlogModel::create($validation);

        return redirect()->back()->with('success', 'Blog Added Successfully');
    }

    public function AdminBlogEditIndex($id)
    {
        $dataq = BlogModel::findOrFail($id);
        return view('admin.edit_blog', compact('dataq'));
    }

    public function AdminBlogEditPost(request $request, $id)
    {

        $blog = BlogModel::findOrFail($id);
        if ($request->hasFile('image')) {
            $file_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads'), $file_name);
            $blog->image = $file_name;
        }

        $blog->title = $request->title;
        $blog->long_description = base64_encode($request->long_description);
        $blog->save();

        return redirect()->back()->with('success', 'Blog Update Succesfully');

    }

    public function AdminBlogDelete($id)
    {
        $blogs = BlogModel::findOrFail($id);
        $blogs->delete();

        return redirect()->back()->with('success', 'Blog deleted successfully.');
    }


}