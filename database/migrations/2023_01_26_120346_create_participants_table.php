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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('cardId');
            $table->string('name');
            $table->string('lastName');
            $table->string('birthName');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('phone_number');
            $table->string('mobile_phone');
            $table->string('email');
            $table->string('user');
            $table->unsignedBigInteger('id_academy');
            $table->foreign('id_academy')
                ->references('id')
                ->on('academies')
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
        Schema::dropIfExists('participants');
    }
};
