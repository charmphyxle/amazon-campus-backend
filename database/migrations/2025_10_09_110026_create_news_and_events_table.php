<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('news_and_events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('badge_title');
            $table->tinyInteger('short_description');
            $table->text('description');
            $table->date('start_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('location');
            $table->string('organizer');
            $table->string('contact');
            $table->string('phone');
            $table->string('image')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_and_events');
    }
};
