<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string ('car', 191)->comment('汽車名稱');
            $table->foreignId( 'vid')->comment('廠牌');
            $table->integer('selling_price')->unsigned()->comment('售價');
            $table->integer('displacement')->unsigned()->nullable()-> comment('排氣量');
            $table->integer('energy_consumption')->unsigned()->nullable()->comment('能耗');
            $table->timestamps();
            $table->foreign('vid') ->references('id')->on('vendors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
