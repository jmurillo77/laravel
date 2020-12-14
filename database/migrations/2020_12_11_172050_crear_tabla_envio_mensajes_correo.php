<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEnvioMensajesCorreo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envio_mensajes_correo', function (Blueprint $table) {
            $table->unsignedInteger('IdCorreo');
            $table->foreign('IdCorreo','fk_EnvioMensajeCorreo_Correo')->references('IdCorreo')->on('correos')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('IdCampania');
            $table->foreign('IdCampania','fk_EnvioMensajeCorreo_Campania')->references('IdCampania')->on('campanias')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('envio_mensajes_correo');
    }
}
