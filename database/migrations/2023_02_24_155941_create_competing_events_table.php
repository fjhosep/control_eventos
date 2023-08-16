<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('competing_events', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('event_id')
                ->references('id')
                ->on('events')
                ->CascadeonUpdate('cascade')
                ->CascadeOnDelete('cascade');

            $table->unsignedBigInteger('competition_id')
                ->references('id')
                ->on('competitions')
                ->CascadeonUpdate('cascade')
                ->CascadeOnDelete('cascade');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('competing_events');
    }
};
