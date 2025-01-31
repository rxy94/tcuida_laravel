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
        Schema::create("medico", function (Blueprint $table) {
            
            # PK
            $table->id("idMed");
            
            # Atributos
            $table->string("nomMed");
            $table->string("apeMed");
            $table->char("numColegiado", 9)->unique();
            $table->char("contactoMed", 9)->unique();
            $table->string("emailMed", 100)->unique();
            $table->string("fotoMed");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("medico");
    }
};
