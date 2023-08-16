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
        Schema::create('in_shopping_carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->unsigned();
            $table->unsignedBigInteger('shopping_cart_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->CascadeonUpdate()
                ->CascadeOnDelete();
            $table->foreign('shopping_cart_id')
                ->references('id')
                ->on('shopping_carts')
                ->CascadeonUpdate()
                ->CascadeOnDelete();

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
        Schema::dropIfExists('in_shopping_carts');
    }
};
