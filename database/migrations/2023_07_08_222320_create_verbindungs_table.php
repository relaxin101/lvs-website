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
        Schema::create('verbindungs', function (Blueprint $table) {
            $table->id();
            $table->string('kuerzel');
            $table->string('verbindung');
            $table->string('straße');
            $table->integer('plz');
            $table->string('ort');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verbindungs');
    }
};
