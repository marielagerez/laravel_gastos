<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->string('descripcion');
            $table->decimal('importe',13,2);
            $table->string('concepto');
            $table->unsignedInteger('id_grupo'); 
            $table->integer('id_pago');
            $table->integer('id_factura');
            $table->integer('id_proveedor');
            $table->integer('id_costos'); 
            $table->integer('id_sucursal'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     
        Schema::dropIfExists('gastos');
    }
}
