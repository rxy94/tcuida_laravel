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
        Schema::create("usuario", function (Blueprint $table) {
            
            # PK
            $table->id("idUsu");

            # Atributos
            $table->string("nomUsu");
            $table->string("apeUsu");
            $table->string("emailUsu")->unique();
            $table->string("claveUsu");
            $table->boolean("admin")->default(false);
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("usuario");
    }
};
