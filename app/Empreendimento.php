<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empreendimento extends Model
{
  public function perfil(){
        return $this->hasOne('App\Perfil');

    }
}
