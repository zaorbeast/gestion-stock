<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entres', function (Blueprint $table) {
            $table->id();
            $table->integer('Quantite');
            $table->unsignedBigInteger('idprod');
            $table->integer('Prix');
            $table->timestamps();
            $table->foreign('idprod')->references('id')->on('produits')->cascadeOnDelete();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entres');
    }
}
