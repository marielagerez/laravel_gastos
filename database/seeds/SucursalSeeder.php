<?php

use Illuminate\Database\Seeder;
use App\Sucursal;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        Sucursal::create([     
            'suc_nombre'=>'Mariela Gerez',
            'suc_direccion'=>'na',
            'suc_foto'=>'1',
            'id_localidad'=>'1',
            'id_provincia'=>'1' 
        ]);
    }
}
