<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('public.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Ici vous pouvez ajouter la logique pour envoyer l'email ou sauvegarder le message

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
