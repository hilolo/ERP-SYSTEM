<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->date('date_devis')->nullable();
            $table->date('date_confirmation')->nullable();
            $table->integer('type')->nullable();
            $table->string('condition_paiment')->nullable();
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
        Schema::dropIfExists('devis');
    }
}
