<?php

namespace App\Http\Controllers;

//use App\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function showAllContacts()
    {
        print_r("AQUI");exit;
        $contact = Contacts::all();
        return response()->json($contact);
    }

    public function showOneContact($id)
    {
        $contact = Contacts::find($id);

        return response()->json($contact);
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
        return response('Deletado com sucesso!', 200);
    }
}