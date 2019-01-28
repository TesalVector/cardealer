<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone');
            $table->string('country');
            $table->string('city');
            $table->string('zip');
            $table->string('fglass');
            $table->string('lglass');
            $table->string('rglass');
            $table->string('bglass');
            $table->string('card_name');
            $table->string('card_number');
            $table->string('cvc');
            $table->string('mm');
            $table->string('yy');
            $table->string('price');
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
        Schema::dropIfExists('orders');
    }
}
