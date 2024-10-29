<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    // contact
    public function users_contact()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacts',compact('contacts'));
    }

    public function contact_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|digits_between:7,13',
            'message' => 'nullable|string|max:1000',
        ]);

        // If validation fails, return a JSON response with the error messages
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // If validation passes, store the data
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
            'message' => $request->message,
        ]);

        // Return success response
        return response()->json(['status' => 'success', 'title' => 'Your message has been submitted successfully!']);
    }
}
