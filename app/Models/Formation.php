<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    public  $fillable = ['titre', 'niveau', 'description', 'heure_formation'];
}
