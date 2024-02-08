<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mitarbeiter', function (Blueprint $table) {
            $table->id();
            $table->char('status_RBE', 20);
            $table->char('funktion_RBE', 20);
            $table->string('andere_funktionen')->nullable();
            $table->integer('reception_RBE');
            $table->integer('branderung_RBE');
            $table->integer('burschung_RBE');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('couleurstudenten');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitarbeiter');
    }
};
