<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditHottestProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hottest_products', function (Blueprint $table) {

            $table->renameColumn('product_1_id', 'slots');
            $table->dropColumn('product_2_id');
            $table->dropColumn('product_3_id');
            $table->dropColumn('product_4_id');
            $table->dropColumn('product_5_id');
            $table->dropColumn('product_6_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hottest_products', function (Blueprint $table) {
            //
        });
    }
}
