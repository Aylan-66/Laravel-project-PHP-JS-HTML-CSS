<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panier', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('produit_id');
            $table->string('produit_titre');
            $table->float('produit_prix');
            $table->integer('quantity')->nullable();
            $table->timestamps();
        });

        Schema::table('panier', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('produit_id')->references('id')->on('produit');
            $table->foreign('produit_titre')->references('Titre')->on('produit');
            $table->foreign('produit_prix')->references('Prix')->on('produit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panier');
    }
}
