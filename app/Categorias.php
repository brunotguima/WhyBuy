<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\promocao;


class Categorias extends Model
{
    protected $table = 'categorias';
    
    public function promocao(){
        return $this->HasMany('App\promocao');
      }
}
