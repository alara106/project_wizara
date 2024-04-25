<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadre extends Model
{
    use HasFactory;
    
    protected $table='cadre_delaboration';
    
    protected $fillable = ['nom_cadre_delaboration'];
}

