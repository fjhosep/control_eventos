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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->string('name')->unique();
            $table->string('place');
            $table->string('address');
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('organizer');
            $table->date('dateStart');
            $table->date('dateEnd');

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
        Schema::dropIfExists('events');
    }
};
