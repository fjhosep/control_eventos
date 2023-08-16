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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();

            $table->string('code', 10);
            $table->string('name');
            $table->string('level');
            $table->string('style')->nullable();
            $table->string('gender');
            $table->string('participants', 10);
            $table->decimal('cost', $precision = 10, $scale = 2)
                ->default(0.00);
            $table->unsignedBigInteger('category_type_id');
            $table->foreign('category_type_id')
                ->references('id')
                ->on('category_types')
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
        Schema::dropIfExists('categories');
    }
};
