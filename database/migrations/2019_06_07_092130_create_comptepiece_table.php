<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComptepieceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptepiece', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('ref')->nullable();
            $table->string('Libellé')->nullable();
            $table->date('date_pieces')->nullable();
            $table->string('name')->nullable();
            $table->string('journal')->nullable();
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->integer('compte_id')->unsigned();
            $table->foreign('compte_id')->references('id')->on('compte')->onDelete('cascade');
            $table->float('Debit')->nullable();
            $table->float('Credit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptepiece');
    }
}
