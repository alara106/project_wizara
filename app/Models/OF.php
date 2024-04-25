<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OF extends Model
{
    use HasFactory;
    protected $table = 'organisation_formation';

    protected $fillable = ['nom_organisation'];
}
