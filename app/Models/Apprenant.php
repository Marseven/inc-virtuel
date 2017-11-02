<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{

    public $fillable = ['niveau_etude', 'diplome', 'user_id'];
    
    
    public function User(){
        
        return $this->belongto('App\User');
    }
}
