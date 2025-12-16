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
        Schema::create('color_series', function (Blueprint $table) {
            $table->id();
            $table->foreignId('color_id')->constrained('colors')->cascadeOnDelete();
            $table->foreignId('series_id')->constrained('series')->cascadeOnDelete();
            $table->integer('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('color_series');
    }
};
