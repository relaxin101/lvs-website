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
        Schema::create('schulungen', function (Blueprint $table) {
            $table->id();
            $table->integer('jahr');
            $table->foreignId('schulungsleiter')->nullable();
            $table->string('landessenior')->nullable();
            $table->string('landesphilistersenior')->nullable();
            $table->string('landesvorsitzender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schulungen');
    }
};
