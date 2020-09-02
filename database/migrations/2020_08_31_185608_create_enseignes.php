<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom',70) ;
            $table->string('logo',255)->nullable() ;
            $table->string('contact', 20) ;
            $table->string('email', 255) ;
            $table->string('site', 200)->nullable() ;
            $table->string('siege',200) ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enseignes');
    }
}
