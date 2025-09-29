<?php

namespace App\Http\Controllers;
use App\Models\ContactModel;

use Illuminate\Http\Request;

class AdminContactController extends Controller
{



    public function AdminAllContact()
    {
        $contacts = ContactModel::orderBy('id', 'desc')->get();
        return view('admin.all_contact', compact('contacts'));
    }


    public function AdminContactDelete($id)
    {
        $contact = ContactModel::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Contact Request Deleted successfully!');
    }

}
