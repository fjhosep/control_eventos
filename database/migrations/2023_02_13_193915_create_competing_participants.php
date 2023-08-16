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
        Schema::create('competing_participants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('participant_id');

            $table->string('user')
                ->references('user')
                ->on('participants')
                ->CascadeonUpdate('cascade')
                ->CascadeOnDelete('cascade');

            $table->unsignedBigInteger('category_id')
                ->references('id')
                ->on('categories')
                ->CascadeonUpdate('cascade')
                ->CascadeOnDelete('cascade');

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
        Schema::dropIfExists('competing_participants');
    }
};
