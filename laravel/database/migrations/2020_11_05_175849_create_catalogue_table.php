<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogue', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produit_id');
            $table->char('produit_titre');
            $table->binary('produit_image')->nullable();
            $table->timestamps();
        });

        Schema::table('catalogue', function (Blueprint $table) {
            $table->foreign('produit_id')->references('id')->on('produit');
            $table->foreign('produit_titre')->references('Titre')->on('produit');
        //    $table->foreign('produit_image')->references('Image')->on('produit');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogue');
    }
}
