<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatarticulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catarticulos', function (Blueprint $table) {
            $table->id();
            $table->string('clave');
            $table->text('descripcion');
            $table->double('precio')->default('0.00');
            $table->boolean('bactivo')->default('1');
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
        Schema::dropIfExists('catarticulos');
    }
}
