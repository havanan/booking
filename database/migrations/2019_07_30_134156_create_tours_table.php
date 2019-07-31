<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('avatar')->nullable();
            $table->string('start_date')->nullable();
            $table->text('vehicle')->nullable();
            $table->text('slide')->nullable();
            $table->text('start_address')->nullable();
            $table->longText('content')->nullable();
            $table->integer('price')->nullable();
            $table->integer('price_discount')->nullable();
            $table->integer('price_children')->nullable();
            $table->integer('price_baby')->nullable();
            $table->integer('location_id')->nullable();
            $table->integer('status')->nullable();
            $table->string('time')->nullable();
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
        Schema::dropIfExists('tours');
    }
}
