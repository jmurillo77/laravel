<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEmpresaDireccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_direccion', function (Blueprint $table) {
            $table->increments('IdEmpresaDireccion');
            $table->unsignedInteger('IdEmpresaLugar');
            $table->foreign('IdEmpresaLugar','fk_EmpresaDireccion_EmpresaLugar')->references('IdEmpresaLugar')->on('empresa_lugar')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('IdDireccion');
            $table->foreign('IdDireccion','fk_EmpresaDireccion_Direccion')->references('IdDireccion')->on('direcciones')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('empresa_direccion');
    }
}
