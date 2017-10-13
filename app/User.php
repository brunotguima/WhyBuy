<?php

namespace App;
use App\Empreendimentos;

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
        'name', 'email', 'password','dateNasc'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function perfil(){
        return $this->hasOne('App\Perfil');

    }

    
    public function empreendimentos(){
        return $this->hasOne('App\Empreendimentos');
    }
}
