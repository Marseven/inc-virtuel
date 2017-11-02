<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    public $fillable = [

        'nom',
        'prenom',
        'email',
        'adresse',
        'ville',
        'pays',
        'nationalite',
        'grade',
        'specialite',
    ];
    
}
