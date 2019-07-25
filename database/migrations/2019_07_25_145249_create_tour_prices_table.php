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
            $table->integer('tour_id');
            $table->float('price',9,3);
            $table->float('discount',9,3);
            $table->float('children',9,3);
            $table->float('baby',9,3);
            $table->date('expired_date');
            $table->integer('status');
            $table->text('note');
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
