<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatparsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catpar', function (Blueprint $table) {
            $table->id();
            $table->char('tipo', '2');
            $table->string('clave');
            $table->string('nombre');
            $table->bigInteger('superior_id')->nullable();
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
        Schema::dropIfExists('catpar');
    }
}
