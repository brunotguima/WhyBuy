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
  public $rules = [
            'nomeFantasia' => 'required|string|max:50',
            'cnpj' => 'required|formato_cnpj|cnpj',
            'inscEst' => 'string|max:15',
            'razaoSocial' => 'required|string|max:255',
  ];
}
