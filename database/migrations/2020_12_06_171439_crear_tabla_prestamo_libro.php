<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPrestamoLibro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo_libro', function (Blueprint $table) {
            $table->increments('Id');
            $table->unsignedInteger('IdUsuario');
            $table->foreign('IdUsuario','fk_PrestamoLibro_Usuarios')->references('IdUsuario')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('IdLibro');
            $table->foreign('IdLibro','fk_PrestamoLibro_Libros')->references('IdLibro')->on('libros')->onDelete('restrict')->onUpdate('restrict');
            $table->string('PrestadoA',100);
            $table->date('FechaPrestamo');
            $table->date('FechaDevolución')->nullable();
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
        Schema::dropIfExists('prestamo_libro');
    }
}
