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
//    protected $fillable = ['name','slug','avatar','start_date','vehicle','slide','start_address','content','price','price_discount','price_children','price_baby','location_id','status','time'];

    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->longText('content')->nullable();
            $table->string('avatar')->nullable();
            $table->string('start_date')->nullable();
            $table->string('vehicle')->nullable();
            $table->string('slide')->nullable();
            $table->string('service')->nullable();
            $table->string('start_address')->nullable();
            $table->string('time')->nullable();
            $table->integer('price')->nullable();
            $table->integer('price_discount')->nullable();
            $table->integer('price_children')->nullable();
            $table->integer('price_baby')->nullable();
            $table->integer('location_id')->nullable();
            $table->integer('status')->nullable();
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
