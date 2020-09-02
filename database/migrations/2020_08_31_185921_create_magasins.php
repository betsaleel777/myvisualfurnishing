<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagasins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magasins', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom', 70) ;
            $table->string('lieu',170) ;
            $table->unsignedTinyInteger('confiance')->nullable() ;
            $table->unsignedBigInteger('enseigne')->index() ;
            $table->unsignedBigInteger('user')->index() ;
            $table->foreign('enseigne')->references('id')->on('enseignes')->onDelete('cascade') ;
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('magasins');
    }
}
