<?php

/**
 * Adaptación del proyecto T-Cuida a Laravel
 * Autora: Ruyi Xia Ye - 2ºDAW
 */

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
        Schema::create("paciente_alergia", function (Blueprint $table) {
            
            # Claves foráneas
            $table->foreignId("idPac")
                  ->constrained("paciente", "idPac")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");

            $table->foreignId("idAlergia")
                  ->constrained("alergia", "idAlergia")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");

            # PK compuesta
            $table->primary(["idPac", "idAlergia"]);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("paciente_alergia");
    }
};
