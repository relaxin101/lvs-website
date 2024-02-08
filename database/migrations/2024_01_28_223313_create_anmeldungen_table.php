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
        Schema::create('anmeldungen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teilnehmer_id')->references('id')->on('teilnehmer');
            $table->foreignId('schulung_id')->references('id')->on('schulungen');

            $table->char('ogv_status', 20)->default('offen');
            $table->char('pdf_status', 20)->default('offen');
            $table->string('pdf_path')->nullable();

            $table->char('email_status', 20)->default('offen');
            $table->boolean('todo')->default(false);
            $table->string('protokoll')->nullable();
            $table->timestamps();

            $table->unique(['teilnehmer_id', 'schulung_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couleurstudenten_schulungen');
    }
};
