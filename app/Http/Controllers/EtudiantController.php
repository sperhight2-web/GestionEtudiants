<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiants.index', compact('etudiants'));
    }

    
    public function create()
    {
        return view('etudiants.create');
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:etudiant,email',
            'age' => 'required|integer|min:1',
        ]);

        Etudiant::create($validated);

        return redirect()->route('etudiants.index')->with('success', 'Étudiant ajouté avec succès.');
    }
}
