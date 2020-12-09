<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaOpciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opciones', function (Blueprint $table) {
            $table->increments('IdOpcion');
            $table->string('Titulo',50)->unique();
            $table->unsignedInteger('IdMenu');
            $table->foreign('IdMenu','fk_Opciones_Menu')->references('IdMenu')->on('menus')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('orden')->default(0);
            $table->string('url',100);
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
        Schema::dropIfExists('opciones');
    }
}
