<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class FonctionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gestion.liste', ['etudiants' => Etudiant::orderBy('created_at', 'desc')->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gestion.ajout', ['etudiant' => new Etudiant()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
            'adresse' => 'required|string|max:255',
            'dateNaiss' => 'required|date',
            'niveau' => 'required|string|max:255',
            'filiere' => 'required|string|max:255',
            'genre' => 'required|string|max:10',
        ]);

        // Création de l'étudiant
        Etudiant::create($validatedData);
        return redirect()->route('liste')->with('success', 'L\'étudiant a été ajouté avec succès');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        return view('gestion.ajout', ['etudiant' => $etudiant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
            'adresse' => 'required|string|max:255',
            'dateNaiss' => 'required|date',
            'niveau' => 'required|string|max:255',
            'filiere' => 'required|string|max:255',
            'genre' => 'required|string|max:10',
        ]);

        // Mise à jour de l'étudiant
        $etudiant->update($validatedData);
        return redirect()->route('liste')->with('success', 'L\'étudiant a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete(); // Supprimer l'étudiant
        return redirect()->route('liste')->with('delete', 'L\'étudiant a été supprimé avec succès');
    }
}
