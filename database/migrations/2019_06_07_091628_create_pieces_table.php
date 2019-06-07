<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pieces', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('Réf')->nullable();
            $table->integer('year')->nullable();
            $table->integer('number')->nullable();
            $table->date('date_pieces')->nullable();
            $table->integer('type')->nullable();           
            $table->string('journal')->nullable();
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
        Schema::dropIfExists('pieces');
    }
}
