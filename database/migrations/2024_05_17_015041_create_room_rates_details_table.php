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
        Schema::create('room_rates_details', function (Blueprint $table) {
            $table->id();
            $table->integer('room_rates_id');
            $table->integer('rate_plan_id');
            $table->boolean('stop_sell')->default(false);
            $table->float('minimum_rate');
            $table->integer('room_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_rates_details');
    }
};
