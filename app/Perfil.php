<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Perfil extends Model
{
    public function user(){
        
        return $this->hasOne('App\User');

    }
}
