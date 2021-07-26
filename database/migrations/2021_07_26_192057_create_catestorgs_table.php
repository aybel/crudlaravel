<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatestorgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catestorg', function (Blueprint $table) {
            $table->id();
            $table->char('tipo', '2')->comment('Tipo de dependencia');
            $table->string('clave')->comment('clave de dependencia');
            $table->string('nombre')->comment('nombre de dependencia');
            $table->bigInteger('superior_id')->nullable()->comment('id_superior');
            $table->boolean('bactivo')->default('1')->comment('1=>Activo 0=>inactivo');
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
        Schema::dropIfExists('catestorg');
    }
}
