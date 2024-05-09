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
        Schema::create('individual_clubs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('individual_id')->constrained('individuals')->onDelete('cascade');
            $table->foreignId('club_id')->constrained('clubs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individual_clubs');
    }
};
