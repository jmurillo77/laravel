<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPermisoUsuarioOpciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_usuario_opciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('IdUsuario');
            $table->foreign('IdUsuario','fk_PermisoUsuarioOpcion_Usuario')->references('IdUsuario')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('IdOpcion');
            $table->foreign('IdOpcion','fk_PermisoUsuarioOpcion_Opcion')->references('IdOpcion')->on('opciones')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('permiso_usuario_opciones');
    }
}
