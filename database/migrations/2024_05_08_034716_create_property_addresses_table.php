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
        Schema::create('property_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('province_id')->index()->nullable();
            $table->unsignedBigInteger('city_id')->index()->nullable();
            $table->unsignedBigInteger('district_id')->index()->nullable();
            $table->unsignedBigInteger('village_id')->index()->nullable();
            $table->text('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('long')->nullable();
            $table->string('lat');
            $table->unsignedBigInteger('properties_id')->index()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_addresses');
    }
};
