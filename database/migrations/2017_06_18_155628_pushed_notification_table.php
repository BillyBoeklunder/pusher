<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PushedNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pushed_notifications', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->references('id')->on('users');
            $table->integer('notification_id')->references('id')->on('notifications');

            $table->unique(['user_id', 'notification_id']);


            $table->boolean('clicked')->default('0');
            $table->dateTimeTz('deliver_time')->nullable();

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
        Schema::dropIfExists('pushed_notifications');
    }
}
