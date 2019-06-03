<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandep', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->date('date_demandep')->nullable();
            $table->date('date_confirmation')->nullable();
            $table->integer('type')->nullable();
            $table->string('etat')->nullable();
            $table->date('date_confi')->nullable();
            $table->float('Montant')->nullable();
            $table->float('Taxe')->nullable();
            $table->float('Total')->nullable();
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
        Schema::dropIfExists('demandep');
    }
}
