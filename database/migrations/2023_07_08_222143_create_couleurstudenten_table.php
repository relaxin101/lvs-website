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
        Schema::create('couleurstudenten', function (Blueprint $table) {
            $table->id();
            $table->char('vorname', 255);
            $table->char('nachname', 255);
            $table->char('titel', 255)->nullable();
            $table->char('couleurname', 255);
            $table->string('strasse');
            $table->integer('plz');
            $table->string('ort');
            $table->string('email');
            $table->string('telefon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couleurstudenten');
    }
};
