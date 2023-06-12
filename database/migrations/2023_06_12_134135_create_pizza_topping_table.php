<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_topping', function (Blueprint $table) {
            $table->unsignedBigInteger('pizza_id');
            $table->foreign('pizza_id')->references('id')->on('pizzas')->onDelete('cascade');

            $table->unsignedBigInteger('topping_id');
            $table->foreign('topping_id')->references('id')->on('toppings')->onDelete('cascade');

            $table->primary(['pizza_id', 'topping_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizza_topping');
    }
};
