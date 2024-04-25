<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programme extends Model
{
    use HasFactory;
    protected $table = 'programme';
    protected $fillable = [
        'nom_programme',
        'id_secteur',
        'id_niveau',
        'id_cadre',
        'id_of',
        'Annee_Dev_Act',
        'Disponibilite',
        'AST',
        'PjF',
        'PF',
        'RE',
        'GOPM',
        'Duree',
        'observations',
        // Ajoutez ici les autres champs de formulaire
    ];
}
