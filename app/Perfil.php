<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Empreendimento;

class Perfil extends Model
{
    public function user(){
        
        return $this->hasOne('App\User');

    }
     public function empreendimento(){
        
        return $this->hasMany('App\Empreendimento');

    }
}
