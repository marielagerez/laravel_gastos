<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
     // 
     protected $fillable = ['grupo_etiqueta','grupo_descripcion','grupo_subgrupo','grupo_subgrupo_desc'];

}
