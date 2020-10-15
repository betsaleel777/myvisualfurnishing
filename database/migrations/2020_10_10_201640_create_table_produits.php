<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 255);
            $table->unsignedInteger('prix');
            $table->unsignedInteger('prix_solde')->nullable();
            $table->string('main_image', 255);
            $table->string('shodai', 255);
            $table->string('nidaime', 255);
            $table->string('sandaime', 255)->nullable();
            $table->unsignedBigInteger('marque')->nullable();
            $table->unsignedBigInteger('magasin');
            $table->longText('description')->nullable();
            $table->boolean('livrable')->default(false);
            $table->string('statut', 70)->nullable();
            $table->foreign('marque')->references('id')->on('marques')->onDelete('cascade');
            $table->foreign('magasin')->references('id')->on('magasins')->onDelete('cascade');
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
        Schema::dropIfExists('produits');
    }
}
