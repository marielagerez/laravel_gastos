<?php
use App\Grupo;
use Illuminate\Database\Seeder;


class grupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Grupo::create(['grupo_etiqueta' => 'FIJOS','grupo_descripcion'=>'Gastos fijos',
        'grupo_subgrupo'=>'1',
        'grupo_subgrupo_desc'=>'Mensual']);
            
        /* 
        DB::table('grupos')->truncate();    
        DB::table('grupos')->insert(['grupo_etiqueta' => 'FIJOS','grupo_descripcion'=>'Gastos fijos',
        'grupo_subgrupo'=>'1',
        'grupo_subgrupo_desc'=>'Mensual']);*/
    }
}
