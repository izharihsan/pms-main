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
        Schema::create('property_facilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facilities_category_id')->index()->nullable();
            $table->string('facilities_category_name')->nullable();
            $table->unsignedBigInteger('facilities_id')->index()->nullable();
            $table->string('facilities_name')->nullable();
            $table->unsignedBigInteger('properties_id')->index()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_facilities');
    }
};
