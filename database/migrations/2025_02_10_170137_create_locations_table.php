<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('location_name', 100);
            $table->string('latitude', 100);
            $table->string('longitude', 100);
            $table->string('address', 512)->nullable();
            $table->string('description', 512)->nullable();

            $table->unsignedBigInteger('religion_id');
            $table->unsignedBigInteger('district_id');

            $table->foreign('religion_id')->references('id')->on('religions');
            $table->foreign('district_id')->references('id')->on('districts');
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
        Schema::dropIfExists('locations');
    }
}
