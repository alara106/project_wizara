<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secteur; // Assurez-vous d'importer le modèle Secteur

class SecteurController extends Controller
{
    // Méthode pour afficher le formulaire d'ajout de secteur
    public function index(){
        $secteurs = Secteur::all();
        return view("pages.secteur", compact('secteurs'));
    }
    
    // Méthode pour traiter le formulaire et ajouter un secteur dans la base de données
    // Méthode pour traiter le formulaire et ajouter un secteur dans la base de données
public function store(Request $request){
    
    // Créer un nouveau secteur dans la base de données
    $secteur=dd( $request->secteur_name);
    Secteur::create([
        'secteur_name' => $request->secteur_name,
    ]);
    
    // Rediriger l'utilisateur avec un message de succès
    return redirect()->route('secteur.index')->with('success', 'Secteur ajouté avec succès');
}


        
    
    
}


