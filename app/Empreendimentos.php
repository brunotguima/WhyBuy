<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Perfil;
use App\User;
use App\promocao;

class Empreendimentos extends Model
{

  public function user(){
        return $this->belongsTo('App\User');
  }
  public function promocao(){
    return $this->HasMany('App\promocao');
  }
  public function ramoativempreendimento(){
    return $this->belongsTo('App\RamoAtivEmpreendimento','ramoAtividade_id');
  }
}
