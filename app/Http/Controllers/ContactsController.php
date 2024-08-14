<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactsController extends Controller
{
    public function store(){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'planet' => 'required',
            'message' => 'required|min:5',
            'deseo_personal' => 'required'
        ]);

        Contact::create(request()->all());

        return redirect()->route('welcome')->with('success', '¡Formulario enviado correctamente!');
    }
}
