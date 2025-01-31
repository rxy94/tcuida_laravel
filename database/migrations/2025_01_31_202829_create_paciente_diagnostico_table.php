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
        Schema::create("paciente_diagnostico", function (Blueprint $table) {

            # Claves foráneas
            $table->foreignId("idPac")
                  ->constrained("paciente", "idPac")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");

            $table->foreignId("idDiag")
                  ->constrained("diagnostico", "idDiag")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");

            # PK compuesta
            $table->primary(["idPac", "idDiag"]);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("paciente_diagnostico");
    }
};
