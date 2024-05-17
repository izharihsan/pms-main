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
        // TABLE INTEGRATED API SWAGER /room/facilities
        Schema::create('room_facilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->index()->nullable();
            $table->unsignedBigInteger('category_name')->index()->nullable();
            $table->unsignedBigInteger('facility_id')->index()->nullable();
            $table->unsignedBigInteger('facility_name')->index()->nullable();
            $table->unsignedBigInteger('property_id')->index();
            $table->unsignedBigInteger('room_id')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_facilities');
    }
};
