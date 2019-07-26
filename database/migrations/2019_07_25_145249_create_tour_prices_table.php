<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tour_id')->nullable();
            $table->float('price',9,3)->nullable();
            $table->float('discount',9,3)->nullable();
            $table->float('children',9,3)->nullable();
            $table->float('baby',9,3)->nullable();
            $table->date('expired_date')->nullable();
            $table->integer('status')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('tour_prices');
    }
}
