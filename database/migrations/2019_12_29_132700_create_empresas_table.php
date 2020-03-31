<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoid',3);
            $table->string('identificacion',20);
            $table->string('nombre',50);
            $table->string('codHabilitacion',10)->nullable();
            $table->string('correo',50);
            $table->string('telefono',50);
            $table->string('rol',2);
            $table->string('tipoEmpresa',10);
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
        Schema::dropIfExists('empresas');
    }
}
