<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->string('model');
            $table->integer('image_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('images');
            $table->integer('price')->unsigned();
            $table->string('description');
            $table->string('wheels_size');
            $table->enum('condition', ['used', 'new']);
            $table->string('exterior_color');
            $table->string('interior_color');
            $table->string('transmission');
            $table->integer('hp')->unsigned();
            $table->integer('cc')->unsigned();
            $table->integer('engine_id')->unsigned();
            $table->foreign('engine_id')->references('id')->on('engines');
            $table->string('consumption');     
            $table->timestamps();

            /* Table settings */
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
