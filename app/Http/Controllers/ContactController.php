<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        Contact::create($data);
        return back()->with('contact_success','Send Message Success');
    }

    public function delete($id){
        Contact::findOrFail($id)->delete();
        return back()->with('contact_delete','Delete Message Success');
    }
}
