<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\promocao;


class Categorias extends Model
{
    protected $table = 'ramoatividade';
    
    public function promocao(){
        return $this->HasMany('App\promocao');
      }
}
