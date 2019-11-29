<?php

use Illuminate\Database\Seeder;
use App\Gasto;
class GastosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Gasto::create([     
            'fecha'=>'2019-11-27',
            'descripcion'=>'verduras',
            'importe'=>'100',
            'concepto'=>'COMIDA',
            'grupo_id'=>1,
            'id_pago'=>1,
            'id_factura'=>1,
            'id_proveedor'=>1,
            'id_costos'=>1,
            'id_sucursal' =>1
        ]);
          //
          Gasto::create([     
            'fecha'=>'2019-11-27',
            'descripcion'=>'os',
            'importe'=>'400',
            'concepto'=>'FIJOS',
            'grupo_id'=>1,
            'id_pago'=>1,
            'id_factura'=>1,
            'id_proveedor'=>1,
            'id_costos'=>1,
            'id_sucursal' =>1
        ]);

    }
}
