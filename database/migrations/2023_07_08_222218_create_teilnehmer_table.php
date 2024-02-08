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
        Schema::create('teilnehmer', function (Blueprint $table) {
            $table->id();

            $table->date('reception');
            $table->date('burschung');
            $table->string('essen')->default('normal');
            $table->string('notfallkontakt');
            $table->string('sonstiges');

            $table->timestamps();
            $table->foreign('id')->references('id')->on('couleurstudenten');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teilnehmer');
    }
};
