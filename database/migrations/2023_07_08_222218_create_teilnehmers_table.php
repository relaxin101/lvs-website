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
        Schema::create('teilnehmers', function (Blueprint $table) {
            $table->id();

            $table->date('reception');
            $table->date('burschung');
            $table->string('essen')->nullable();
            $table->string('notfallkontakt');
            $table->string('sonstiges');

            $table->timestamps();
            $table->foreign('id')->references('id')->on('couleurstudents');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teilnehmers');
    }
};
