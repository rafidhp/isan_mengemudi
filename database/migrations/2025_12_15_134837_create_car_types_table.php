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
        Schema::create('car_types', function (Blueprint $table) {
            $table->id();
            $table->enum('type_name', [
                'SEDAN',
                'HATCHBACK',
                'MPV',
                'SUV',
                'CROSSOVER',
                'CITY CAR',
                'PICKUP',
                'DOUBLE CABIN',
                'MINIBUS',
                'SPORT CAR',
            ])->unique();
            $table->string('type_capacity');
            $table->text('description')->nullable();
            $table->text('type_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_types');
    }
};
