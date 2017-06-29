<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHottestProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hottest_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('merchant_account_id')->nullable();
            $table->integer('product_1_id')->nullable();
            $table->integer('product_2_id')->nullable();
            $table->integer('product_3_id')->nullable();
            $table->integer('product_4_id')->nullable();
            $table->integer('product_5_id')->nullable();
            $table->integer('product_6_id')->nullable();
            $table->datetime('interval_time')->nullable();
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
        Schema::dropIfExists('hottest_products');
    }
}
