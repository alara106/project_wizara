<?php

namespace App\Http\Controllers;


use App\Models\cadre;
use Illuminate\Http\Request;

class CadreController extends Controller
{
    //
    public function index(){
        $cadres =cadre::all();
        return view("pages.cadre", compact('cadres'));
    }
    
    // Méthode pour traiter le formulaire et ajouter un secteur dans la base de données
    // Méthode pour traiter le formulaire et ajouter un secteur dans la base de données
public function store(Request $request){
    
    // Créer un nouveau secteur dans la base de données
    cadre::create([
        'nom_cadre_delaboration' => $request->nom_cadre_delaboration
    ]);

    // Rediriger l'utilisateur avec un message de succès
    return redirect()->route('cadre.index')->with('success', 'Secteur ajouté avec succès');
}


        // Rediriger l'utilisateur avec un message de succès
    
   
}

