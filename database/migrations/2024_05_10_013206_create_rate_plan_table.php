<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rate_plan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('cancelation_policy');
            $table->string('meals')->nullable();
            $table->string('connected_rooms');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rate_plan');
    }
};
