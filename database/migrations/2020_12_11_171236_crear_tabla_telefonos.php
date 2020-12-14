<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTelefonos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefonos', function (Blueprint $table) {
            $table->increments('IdTelefono');
            $table->string('Telefono',50)->unique();
            $table->unsignedInteger('IdOperadoraDispositivo');
            $table->foreign('IdOperadoraDispositivo','fk_Telefono_OperadoraDispositivo')->references('IdOperadoraDispositivo')->on('telefono_operadora_dispositivo')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefonos');
    }
}
