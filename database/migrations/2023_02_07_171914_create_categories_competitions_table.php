<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('categories_competitions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->CascadeonUpdate('cascade')
                ->CascadeOnDelete('cascade');

            $table->unsignedBigInteger('competition_id');
            $table->foreign('competition_id')
                ->references('id')
                ->on('competitions')
                ->CascadeonUpdate('cascade')
                ->CascadeOnDelete('cascade');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('categories_competitions');
    }
};
