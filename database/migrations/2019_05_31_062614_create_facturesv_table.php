<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturesvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturesv', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('year');
            $table->integer('number');
            $table->integer('devis_id')->unsigned();
            $table->foreign('devis_id')->references('id')->on('devis')->onDelete('cascade');
            $table->date('date_facture')->nullable();
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
        Schema::dropIfExists('facturesv');
    }
}
