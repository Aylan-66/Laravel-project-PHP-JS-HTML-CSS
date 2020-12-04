<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Titre');
            $table->binary('Image')->nullable();
            $table->float('Prix')->nullable();
			$table->string('Categorie');
            $table->longText('Description')->nullable();
            $table->integer('nbre_produit')->nullable();
            $table->timestamps();
        });

        Schema::table('produit', function (Blueprint $table) {
       //     $table->foreign('user_id')->references('id')->on('users');
        //    $table->foreign('produit_id')->references('id')->on('produit');
          //  $table->foreign('produit_titre')->references('Titre')->on('produit');
            //$table->foreign('produit_prix')->references('Prix')->on('produit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit');
    }
}
