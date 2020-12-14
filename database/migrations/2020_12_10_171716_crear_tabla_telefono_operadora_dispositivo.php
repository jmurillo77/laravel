<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTelefonoOperadoraDispositivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefono_operadora_dispositivo', function (Blueprint $table) {
            $table->increments('IdOperadoraDispositivo');
            $table->unsignedInteger('IdTipoOperadora');
            $table->foreign('IdTipoOperadora','fk_OperadoraDispositivo_Operadora')->references('IdTipoOperadora')->on('telefono_tipo_operadora')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('IdTipoDispositivo');
            $table->foreign('IdTipoDispositivo','fk_OperadoraDispositivo_Dispositivo')->references('IdTipoDispositivo')->on('telefono_tipo_dispositivo')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('telefono_operadora_dispositivo');
    }
}
