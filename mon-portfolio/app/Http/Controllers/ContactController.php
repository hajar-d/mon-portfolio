<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message; // Importation du modèle Message
use Illuminate\Support\Facades\Mail; // Importation de la classe Mail
use App\Mail\ContactMail; // Importation de la classe ContactMail


class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Enregistrement des données dans la base de données
        Message::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Optionnel : Envoi de l'email
        Mail::to('hajarakchoud @gmail.com')->send(new ContactMail($request->all()));

        // Redirection avec message de succès
        return redirect()->route('contact.create')->with('success', 'Votre message a été envoyé avec succès et enregistré !');
    }
}
