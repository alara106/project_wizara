<?php

namespace App\Http\Controllers;


use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    //
    public function index(){
        $niveaux = Niveau::all();
        return view("pages.niveau", compact('niveaux'));
    }
    
    
    // Méthode pour traiter le formulaire et ajouter un secteur dans la base de données
    // Méthode pour traiter le formulaire et ajouter un secteur dans la base de données
public function store(Request $request){
    
    // Créer un nouveau secteur dans la base de données
    Niveau::create([
        'nom_niveau' => $request->nom_niveau
    ]);

    // Rediriger l'utilisateur avec un message de succès
    return redirect()->route('niveau.index')->with('success', 'Secteur ajouté avec succès');
}


        // Rediriger l'utilisateur avec un message de succès
    
    
}

