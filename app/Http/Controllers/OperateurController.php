<?php

namespace App\Http\Controllers;


use App\Models\OF;
use Illuminate\Http\Request;

class OperateurController extends Controller
{
    //
    public function index(){
        $organisations = OF::all();
        return view("pages.operateur", compact('organisations'));
    }
    
    // Méthode pour traiter le formulaire et ajouter un secteur dans la base de données
    // Méthode pour traiter le formulaire et ajouter un secteur dans la base de données
public function store(Request $request){
    
    // Créer un nouveau secteur dans la base de données
   OF::create([
        'nom_organisation' => $request->nom_organisation
    ]);

    // Rediriger l'utilisateur avec un message de succès
    return redirect()->route('opperateur.index')->with('success', 'Secteur ajouté avec succès');
}


        // Rediriger l'utilisateur avec un message de succès
    
    public function destroy($id){
        // Rechercher le secteur par son identifiant
        $secteur = Niveau::findOrFail($id);
        $secteur->delete();

    }
}

