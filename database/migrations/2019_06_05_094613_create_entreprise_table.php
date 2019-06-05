<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrepriseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('ville')->nullable();
            $table->string('rue')->nullable();
            $table->string('postal')->nullable();
            $table->string('Telephone')->nullable();
            $table->string('NTVA')->nullable();
            $table->string('Site_web')->nullable();
            $table->string('logo')->default('public/clients/logo.PNG');
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
        Schema::dropIfExists('entreprise');
    }
}
