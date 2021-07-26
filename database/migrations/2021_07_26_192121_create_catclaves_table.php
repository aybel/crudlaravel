<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatclavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catclaves', function (Blueprint $table) {
            $table->id();
            $table->string('clave');
            $table->boolean('bactivo')->default('1');
            $table->foreignId('catestorg_id')->nullable()->references('id')->on('catestorg')->comment('id del centro de costo');
            $table->foreignId('catestprg_id')->nullable()->references('id')->on('catestprg')->comment('id del proyecto');
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
        Schema::dropIfExists('catclaves');
    }
}
