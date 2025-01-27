<?php

namespace App\Http\Controllers;

use App\Models\personnes;
use Illuminate\Http\Request;

class PersonnesController extends Controller
{
    /**
     * Afficher la liste des personnes.
     */
    public function index()
    {
        $personnes = Personnes::paginate(10);
        return view('admin.personne.index', compact('personnes'));
    }

    public function indexAgents()
    {
        $agents = Personnes::where('status', 'agent')->paginate(10);
        return view('admin.personne.index_agents', compact('agents'));
    }

    public function indexProprietaires()
    {
        $proprietaires = Personnes::where('status', 'proprietaire')->paginate(10);
        return view('admin.personne.index_proprietaires', compact('proprietaires'));
    }

    public function indexClients()
    {
        $clients = Personnes::where('status', 'client')->paginate(10);
        return view('admin.personne.index_clients', compact('clients'));
    }
    /**
     * Afficher le formulaire de création d'une nouvelle personne.
     */
    public function create()
    {
        return view('admin.personne.create');
    }

    /**
     * Enregistrer une nouvelle personne.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'matricule' => 'nullable|string|unique:personnes',
            'date_naissance' => 'nullable|date',
            'lieu_naissance' => 'nullable|string|max:255',
            'nin' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:20',
            'email' => 'required|string|email|max:255|unique:personnes',
            'status' => 'required|string|unique:personnes',
        ]);

        Personnes::create($request->all());

        return redirect()->route('admin.personne.index')->with('success', 'Personne créée avec succès.');
    }

    /**
     * Afficher les détails d'une personne.
     */
    public function show(Personnes $personne)
    {
        return view('admin.personne.show', compact('personne'));
    }

    /**
     * Afficher le formulaire d'édition d'une personne.
     */
    public function edit(Personnes $personne)
    {
        return view('admin.personne.edit', compact('personne'));
    }

    /**
     * Mettre à jour les informations d'une personne.
     */
    public function update(Request $request, Personnes $personne)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'matricule' => 'nullable|string|unique:personnes,matricule,' . $personne->id,
            'date_naissance' => 'nullable|date',
            'lieu_naissance' => 'nullable|string|max:255',
            'nin' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:20',
            'email' => 'required|string|email|max:255|unique:personnes,email,' . $personne->id,
            'status' => 'required|string|unique:personnes,status,' . $personne->id,
        ]);

        $personne->update($request->all());

        return redirect()->route('admin.personne.index')->with('success', 'Personne mise à jour avec succès.');
    }

    /**
     * Supprimer une personne.
     */
    public function destroy(Personnes $personne)
    {
        $personne->delete();

        return redirect()->route('admin.personne.index')->with('success', 'Personne supprimée avec succès.');
    }
}