<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class MessageController extends Controller
{
    /**
     * Enregistrer le message envoyé via le formulaire de contact.
     */
    public function store(Request $request)
    {
        // Valider les données envoyées
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Enregistrer le message dans la base de données
        message::create([
            'sujet' => $validated['subject'],
            'prenom_emetteur' => explode(' ', $validated['name'])[0], // Sépare prénom et nom
            'nom_emetteur' => explode(' ', $validated['name'])[1] ?? '', // Si aucun nom de famille, vide
            'email_emetteur' => $validated['email'],
            'tel_emetteur' => $validated['phone'],
            'contenu_message' => $validated['message'],
            'bien_conserner' => null, // Par défaut
        ]);

        // Redirection avec message de confirmation
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }

    public function store_reservation(Request $request)
    {
        $validated = $request->validate([
            'bien_id' => 'required|exists:proprietes,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        // Ajouter le bien concerné dans le message
        Message::create([
            'sujet' => 'Réservation',
            'prenom_emetteur' => explode(' ', $validated['name'])[0], // Sépare prénom et nom
            'nom_emetteur' => explode(' ', $validated['name'])[1] ?? '', // Si aucun nom de famille, vide
            'email_emetteur' => $validated['email'],
            'tel_emetteur' => $validated['telephone'],
            'contenu_message' => $validated['message'] ?? 'Aucun message',
            'bien_conserner' => $validated['bien_id'], // Ajout de la relation avec le bien concerné
        ]);

        return back()->with('success', 'Votre réservation a été envoyée avec succès.');
    }

}
