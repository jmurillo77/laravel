<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEnvioMensajesSms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envio_mensajes_sms', function (Blueprint $table) {
            $table->unsignedInteger('IdTelefono');
            $table->foreign('IdTelefono','fk_EnvioMensajeSMS_Telefono')->references('IdTelefono')->on('telefonos')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('IdCampania');
            $table->foreign('IdCampania','fk_EnvioMensajeSMS_Campania')->references('IdCampania')->on('campanias')->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('Estado');
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
        Schema::dropIfExists('envio_mensajes_sms');
    }
}
