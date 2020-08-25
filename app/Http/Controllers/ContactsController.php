<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function showAllContacts()
    {
        $contact = Contacts::all();
        return response()->json($contact);
    }

    public function showOneContact($id)
    {
        return response()->json(Contacts::find($id));
    }

    public function create(Request $request)
    {   
        $contact = Contacts::create($request->all());

        return response()->json($contact, 201);
    }

    public function update($id, Request $request)
    {
        $contact = Contacts::findOrFail($id);
        $contact->update($request->all());

        return response()->json($contact, 200);
    }

    public function delete($id)
    {
        Contacts::findOrFail($id)->delete();
        return response('Success!', 200);
    }
}