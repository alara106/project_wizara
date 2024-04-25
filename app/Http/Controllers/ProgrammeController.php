<?php

namespace App\Http\Controllers;
use App\Models\OF;

use App\Models\cadre;
use App\Models\Niveau;
use App\Models\Secteur;
use App\Models\Programme;

use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function index()
    {
        // Récupérer tous les secteurs
        $secteurs = Secteur::all();
        $niveaux = Niveau::all();
        $cadre=cadre::all();
        $operateur=OF::all();
        // Retourner la vue avec les secteurs
        return view("pages.programme", compact("secteurs","niveaux","cadre","operateur"));

  
    }
    public function store(Request $request ){
        // dd($request);
        programme::create([
            'nom_programme' =>$request->nom_programme,
            'id_secteur' =>$request->id_secteur,
            'id_niveau' =>(int)$request->nivid,
            'Duree' =>(int)$request->duree,
            'id_cadre'=>(int)$request->cadid,
            'id_of'=>(int)$request->operaid,
            'Annee_Dev_Act'=>(int)$request->Annee_Dev_Act,
            'Disponibilite' =>$request->cod,
            'AST' =>$request->ast,
            'PjF' =>$request->pjf,
            'PF' =>$request->pf,
            'RE' =>$request->re,
            'GOPM' =>$request->gopm,
            'observations' =>$request->observations

        ]);
        return redirect()->route('programme.index')->with('success', 'programme ajouté avec succès');
            
    }
    

   
}
