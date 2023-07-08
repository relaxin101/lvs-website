<?php

use App\Models\Mitarbeiter;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mitarbeiters', function (Blueprint $table) {
            $table->id();
            $table->enum('status_RBE',
                [
                    Mitarbeiter::RBE_AKTIVER,
                    Mitarbeiter::RBE_ASSI,
                    Mitarbeiter::RBE_ALTSCHEISSER,
                    Mitarbeiter::RBE_EHRENMITGLIED
                ]
            );
            $table->enum('funktion_RBE',
                [
                    Mitarbeiter::RBE_PRAETOR,
                    Mitarbeiter::RBE_PRAETOR,
                    Mitarbeiter::RBE_SEMLEI
                ]
            );
            $table->string('andere_funktionen');
            $table->integer('rezeption_RBE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitarbeiters');
    }
};
