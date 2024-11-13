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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('events_name');
            $table->string('events_description');
            $table->string('events_title');
            $table->string('events_date');
            $table->string('start_booking_date');
            $table->string('end_booking_date');
            $table->string('events_time');
            $table->string('status');
            $table->string('events_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
