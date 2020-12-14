<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('IdEmpresa');
            $table->string('RUC',13)->unique();
            $table->string('RazonSocial',50);
            $table->string('NombreComercial',50);
            $table->unsignedInteger('Contacto');
            $table->foreign('Contacto','fk_Empresa_Persona')->references('IdPersona')->on('personas')->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('Estado');
            $table->string('Driver',50)->nullable();
            $table->string('Server',50)->nullable();
            $table->string('DataBase',50)->nullable();
            $table->smallInteger('Puerto')->length(4)->unsigned()->nullable();
            $table->string('Usuario',50)->nullable();
            $table->string('Passwd',50)->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
