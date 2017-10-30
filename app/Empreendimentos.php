<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Perfil;
use App\User;

class Empreendimentos extends Model
{
  public function user(){
        return $this->belongsTo('App\User');
  }
  protected $fillable = [
    'nomeFantasia','cnpj','inscEst','cep','cidade','estado','telUm','ramoAtiv','razaoSocial','EmpImage',
  ];
}
