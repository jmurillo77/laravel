<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPermisoUsuarioEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_usuario_empresa', function (Blueprint $table) {
            $table->increments('IdPermisoUsuarioEmpresa');
            $table->unsignedInteger('IdUsuario');
            $table->foreign('IdUsuario','fk_PermisoUsuarioEmpresa_Usuario')->references('IdUsuario')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('IdEmpresa');
            $table->foreign('IdEmpresa','fk_PermisoUsuarioEmpresa_Empresa')->references('IdEmpresa')->on('empresas')->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('Permiso');
            $table->boolean('Principal');
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
        Schema::dropIfExists('permiso_usuario_empresa');
    }
}
