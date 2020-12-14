<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEmpresaLugar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_lugar', function (Blueprint $table) {
            $table->increments('IdEmpresaLugar');
            $table->unsignedInteger('IdTipoLugar');
            $table->foreign('IdTipoLugar','fk_EmpresaLugar_TipoLugar')->references('IdTipoLugar')->on('empresa_tipo_lugar')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('IdEmpresa');
            $table->foreign('IdEmpresa','fk_EmpresaLugar_Empresa')->references('IdEmpresa')->on('empresas')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('empresa_lugar');
    }
}
