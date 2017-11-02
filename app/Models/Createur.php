<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Createur extends Model
{

    public $fillable = ['type', 'description', 'cv', 'user_id'];

    public function User(){

        return $this->belongto('App\User');
    }
}
