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
        Schema::create('room_bedrooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('qty');
            $table->unsignedBigInteger('bedroom_type_id')->index()->comment('integrated api swager /roomType');
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
        Schema::dropIfExists('room_bedrooms');
    }
};
