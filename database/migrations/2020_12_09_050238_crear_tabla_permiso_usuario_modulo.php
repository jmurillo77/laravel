<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPermisoUsuarioModulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_usuario_modulo', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('IdUsuario');
            $table->foreign('IdUsuario','fk_PermisoUsuarioModulo_Usuario')->references('IdUsuario')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('IdModulo');
            $table->foreign('IdModulo','fk_PermisoUsuarioModulo_Modulo')->references('IdModulo')->on('modulos')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('permiso_usuario_modulo');
    }
}
