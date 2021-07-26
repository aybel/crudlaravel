<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisicionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        Schema::create('requisiciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('folio');
            $table->string('fecha_elaboracion');
            $table->foreignId('catestorg_id')->references('id')->on('catestorg')->comment('dependencia de la requisicion');
            $table->foreignId('catpar_id')->references('id')->on('catpar')->comment('partida de la requisicion');
            $table->foreignId('catclaves_id')->references('id')->on('catclaves')->comment('clave de la requisicion');
            $table->foreignId('user_id')->references('id')->on('users')->comment('Usuario que genera la requisicion');
            $table->foreignId('catstatus_id')->references('id')->on('catstatus')->comment('Estado la requisicion');
            $table->integer('mes')->comment('mes de afectacion');
            $table->text('concepto')->nullable();
            $table->text('revisa')->nullable();
            $table->text('autoriza')->nullable();
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

        Schema::dropIfExists('requisiciones');
    }
}
