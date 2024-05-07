<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
// index page render function
    public function index()
    {
        $contacts = Contact::get();
        return view('admin.contact.index',compact('contacts'));
    }

    //  delete function
    public function delete($id)
    {
        try {
            Contact::find($id)->delete();
        } catch (Exception $exception) {
            toastr()->error('Error While Deleting Contact');
            return back();
        }
        toastr()->success('Contact Deleted Successfully');
        return back();
    }
}