<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfopagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infopages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('direccion');
            $table->string('celular');
            $table->string('mapa');
            $table->string('link_fb');
            $table->string('link_ig');
            $table->string('link_tw');
            $table->string('link_wt');
            $table->string('link_yt');
            $table->string('link_pse');
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
        Schema::dropIfExists('infopages');
    }
}
