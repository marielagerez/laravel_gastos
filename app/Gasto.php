<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    // 
     protected $fillable = ['fecha','descripcion','importe','concepto','grupo_id' ,'id_pago','id_factura','id_proveedor','id_costos','id_sucursal'];
     

}
