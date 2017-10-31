<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\Empreendimentos;
class promocao extends Model
{
    public function user(){
        return $this->HasOne('App\Empreendimentos');
  }
}
