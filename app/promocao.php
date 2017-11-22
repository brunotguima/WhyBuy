<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\Empreendimentos;
use App\Categorias;
class promocao extends Model
{
    public function empreendimento(){
        return $this->belongsTo('App\Empreendimentos');
  }
  public function categoria(){
    return $this->belongsTo('App\Categorias');
}
}
