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
        Schema::create('mitarbeiter_schulungen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mitarbeiter_id')->references('id')->on('mitarbeiter');
            $table->foreignId('schulung_id')->references('id')->on('schulungen');
            $table->char('funktion', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitarbeiter_schulungen');
    }
};
