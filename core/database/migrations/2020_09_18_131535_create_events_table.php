<?php

use Illuminate\Support\Facades\Schema;
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
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->longText('content')->nullable();
            $table->date('date');
            $table->date('enddate');
            $table->time('time');
            $table->time('endtime');
            $table->double('cost');
            $table->integer('available_tickets');
            $table->longText('venue');
            $table->longText('meta_tags')->nullable();
            $table->longText('meta_description')->nullable();
            $table->json('image')->nullable();
            $table->longText('video')->nullable();
            $table->unsignedBigInteger('lang_id');
            $table->unsignedBigInteger('cat_id');
            $table->foreign('lang_id')->references('id')->on('languages')->onDelete('cascade');
            $table->foreign('cat_id')->references('id')->on('event_categories')->onDelete('cascade');
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
        Schema::dropIfExists('events');
    }
}
