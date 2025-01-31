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
        Schema::create("medico_especialidad", function (Blueprint $table) {

            # Claves foráneas
            $table->foreignId("idMed")
                  ->constrained("medico", "idMed")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");

            $table->foreignId("idEsp")
                  ->constrained("especialidad", "idEsp")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");

            # PK compuesta
            $table->primary(["idMed", "idEsp"]);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("medico_especialidad");
    }
};
