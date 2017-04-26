<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('host_id')->unsigned()->index();
            $table->foreign('host_id')->references('id')->on('users');
            $table->integer('guest_id')->unsigned()->index();
            $table->foreign('guest_id')->references('id')->on('users');
            $table->integer('event_id')->unsigned()->index();
            $table->foreign('event_id')->references('id')->on('events');
            $table->integer('rating');
            $table->integer('review')->nullable();
            $table->boolean('type');
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
        Schema::drop('reviews');
    }
}
