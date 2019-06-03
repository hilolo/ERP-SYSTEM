<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisarticlesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devisarticlesa', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('descr')->nullable();
            $table->integer('demandep_id')->unsigned();
            $table->foreign('demandep_id')->references('id')->on('demandep')->onDelete('cascade');
            $table->integer('article_id')->unsigned();
            $table->foreign('article_id')->references('id')->on('articles');
            $table->integer('qte');
         
            $table->float('soustotal')->nullable();

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
        Schema::dropIfExists('devisarticlesa');
    }
}
