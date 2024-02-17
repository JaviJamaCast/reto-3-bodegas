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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer("codigo_acceso", 8)->unique();
            $table->string("nombre", 255);
            $table->string("apellidos", 255);
            $table->string("telefono", 255);
            $table->string("direccion", 255);
            $table->string("email", 255);
            $table->string("foto_perfil", 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
