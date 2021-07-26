<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatestprgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catestprg', function (Blueprint $table) {
            $table->id();
            $table->char('tipo', '3')->comment('Tipo de estprg');
            $table->string('clave')->comment('clave de estprg');
            $table->string('nombre')->comment('nombre de estprg');
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
        Schema::dropIfExists('catestprg');
    }
}
