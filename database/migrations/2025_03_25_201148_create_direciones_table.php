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
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contribuyente_id')->constrained('contribuyentes')->onDelete('cascade');
            $table->string('Calle');
            $table->string('Numero_Exterior', 10)->nullable();
            $table->string('Numero_Interior', 10)->nullable();
            $table->string('Cruzamientos')->nullable();
            $table->string('Codigo_Postal', 5);
            $table->string('Colonia');
            $table->string('Localidad');
            $table->string('Municipio');
            $table->string('Entidad_Federativa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dirrecciones');
    }
};
