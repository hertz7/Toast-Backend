<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('host_id')->unsigned()->index();
            $table->foreign('host_id')->references('id')->on('users');
            $table-> dateTimeTz('start_time');
            $table->dateTimeTz('end_time');
            $table->integer('images');
            $table->string('description');
            $table->string('special_note')->nullable();
            $table->boolean('hasActivity');
            $table->decimal('latitude', 9, 6);
            $table->decimal('longitude', 9, 6);
            $table->boolean('group_preferences');
            $table->integer('plates');
            $table->integer('plate_cost');
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
        Schema::drop('events');
    }
}
