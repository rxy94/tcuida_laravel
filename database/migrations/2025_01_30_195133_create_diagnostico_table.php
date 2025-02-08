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
        Schema::create("diagnostico", function (Blueprint $table) {
            
            # PK
            $table->id("idDiag");

            # Atributos
            $table->string("nomDiag");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("diagnostico");
    }
};
