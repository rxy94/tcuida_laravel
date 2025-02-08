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
        Schema::create("paciente", function (Blueprint $table) {
            
            # PK
            $table->id("idPac");
            
            # Atributos
            $table->string("nomPac");
            $table->string("apePac");
            $table->string("dniPac")->unique();
            $table->date("fechaNac");
            $table->char("genero", 9);
            $table->char("contactoPac", 9)->unique();
            $table->char("numHistoria", 10)->unique();
            $table->string("dirPaciente", 100);

            # FK
            $table->foreignId("idMed")
                  ->nullable()
                  ->constrained("medico", "idMed") 
                  ->onDelete("set null")   
                  ->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("paciente");
    }
};
