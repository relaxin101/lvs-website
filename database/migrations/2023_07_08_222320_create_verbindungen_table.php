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
        Schema::create('verbindungen', function (Blueprint $table) {
            $table->id();
            $table->string('kuerzel');
            $table->string('verbindung');
            $table->string('straße');
            $table->integer('plz');
            $table->string('ort');
            $table->timestamps();
        });

        Schema::create('couleurstudent_verbindung', function (Blueprint $table) {
            $table->foreignId('couleurstudent_id')->references('id')->on('couleurstudenten');
            $table->foreignId('verbindung_id')->references('id')->on('verbindungen');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verbindungen');
    }
};
