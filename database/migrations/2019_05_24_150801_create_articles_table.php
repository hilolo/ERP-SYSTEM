<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type')->nullable();
            $table->integer('cat')->nullable();
            $table->string('name')->nullable();
            $table->float('prix')->nullable();
            $table->string('tva')->nullable();
            $table->string('code_barre')->nullable();
            $table->string('etat')->nullable();
            $table->string('path_img')->default('public/clients/simple2.PNG');

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
        Schema::dropIfExists('articles');
    }
}
