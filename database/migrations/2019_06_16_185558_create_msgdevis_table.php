<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsgdevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msgdevis', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('status')->nullable();
            $table->integer('devis_id')->unsigned();
            $table->foreign('devis_id')->references('id')->on('devis')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('pathupp')->nullable();
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
        Schema::dropIfExists('msgdevis');
    }
}
