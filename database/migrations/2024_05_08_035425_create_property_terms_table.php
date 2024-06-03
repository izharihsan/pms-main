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
        Schema::create('property_terms', function (Blueprint $table) {
            $table->id();
            $table->integer('reception_area')->comment('1 = Availabel, 2 = Not Available');
            $table->time('check_in_from');
            $table->time('check_in_until');
            $table->time('check_out_from');
            $table->time('check_out_until');
            $table->integer('range');
            $table->integer('floors');
            $table->integer('cancelation_policy')->comment('1 = Cancel 14D prior arrival 50% charge. No Show 50% charge');
            $table->integer('release_time_type')->comment('1 = Hours, 2 = Day');
            $table->integer('release_after_booking');
            $table->unsignedBigInteger('properties_id')->index()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_terms');
    }
};
