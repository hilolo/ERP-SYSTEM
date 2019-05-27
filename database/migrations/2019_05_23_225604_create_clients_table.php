<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('type')->nullable();
              $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('adresse')->nullable();
            $table->string('Telephone')->nullable();
            $table->string('NTVA')->nullable();
            $table->string('Site_web')->nullable();
            $table->string('FAX')->nullable();
            $table->string('path_img')->default('public/clients/simple.PNG');
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
        Schema::dropIfExists('clients');
    }
}
