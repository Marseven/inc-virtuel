<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contributeur extends Model
{

    public $fillable = ['fond_disponible', 'visibilite', 'user_id'];

    public function User(){

        return $this->belongto('App\User');
    }
}
