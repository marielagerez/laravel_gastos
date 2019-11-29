<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    //
    protected $table='sucursales';
    protected $fillable = ['suc_nombre','suc_direccion','suc_foto','id_localidad','id_provincia'];

}
