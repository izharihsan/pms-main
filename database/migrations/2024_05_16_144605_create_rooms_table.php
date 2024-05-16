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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_name');
            $table->unsignedBigInteger('room_type_id')->index()->comment('integrated api swager');
            $table->integer('status')->default(1)->comment('1 = active, 2 = inactive');
            $table->integer('number_of_room');
            $table->integer('max_occupancy');
            $table->integer('room_width');
            $table->integer('room_length');
            $table->integer('min_rate');
            $table->integer('extra_guest_fee');
            $table->integer('max_extra_bed');
            $table->integer('price_of_extra_bed');
            $table->unsignedBigInteger('property_id')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_spesifications');
    }
};
