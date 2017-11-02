<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'telephone', 'adresse', 'ville', 'pays', 'role', 'email', 'password', 'confirmation_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function apprenants(){

        return $this->hasmany('App\Models\Apprenant');
    }
    
    public function contributeurs(){
        
        return $this->hasmany('App\Models\Contributeur');
    }

    public function createurs(){

        return $this->hasmany('App\Models\Createur');
    }
}
