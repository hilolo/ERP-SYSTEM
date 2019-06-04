<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturea', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('year');
            $table->integer('number');
            $table->integer('demandep_id')->unsigned();
            $table->foreign('demandep_id')->references('id')->on('demandep')->onDelete('cascade');
            $table->date('date_facture')->nullable();
            $table->string('date_facture')->nullable();
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
        Schema::dropIfExists('facturea');
    }
}
