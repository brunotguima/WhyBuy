<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Perfil;
use App\User;

class Empreendimento extends Model
{
  public function perfil(){
        return $this->belongsTo('App\Perfil');
  }
}
