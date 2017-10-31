<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RamoAtivEmpreendimento extends Model
{
   protected $table = 'ramoatividade';

   public function empreendimentos(){
       return $this->hasMany('App\Empreendimentos');
   }
}
