<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_uploads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->longText('content')->nullable();
            $table->date('date');
            $table->date('end_date');
            $table->time('time');
            $table->time('end_time');
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
        Schema::dropIfExists('event_uploads');
    }
};
