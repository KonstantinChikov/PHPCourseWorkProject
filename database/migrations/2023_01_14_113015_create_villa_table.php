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
        Schema::create('villa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('house_locations_id');
            $table->string('name');
            $table->integer('beds');
            $table->integer('rooms');
            $table->integer('bathrooms');
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('type');
            $table->foreign('house_locations_id')->references('id')->on('house_locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('villa');
    }
};
