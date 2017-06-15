<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRowSocialNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('social_notifications', function (Blueprint $table) {
            $table->integer('description_id')->nullable()->change();
            $table->integer('user_id')->nullable()->change();
            $table->integer('foreigner_id')->nullable()->change();
            $table->string('message')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('social_notifications', function (Blueprint $table) {
            //
        });
    }
}
