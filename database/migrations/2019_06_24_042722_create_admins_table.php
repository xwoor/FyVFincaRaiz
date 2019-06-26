<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('precio_venta');
            $table->string('precio_arriendo');
            $table->string('contenido');
            $table->string('requisito_1');
            $table->string('requisito_2');
            $table->string('requisito_3');
            $table->string('requisito_4');
            $table->string('requisito_5');
            $table->string('requisito_6');
            $table->string('requisito_7');
            $table->string('img_1');
            $table->string('img_2');
            $table->string('img_3');
            $table->string('img_4');
            $table->string('img_5');
            $table->string('img_6');
            $table->string('img_7');
            $table->string('img_8');
            $table->string('estatus');
            $table->string('tipo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
