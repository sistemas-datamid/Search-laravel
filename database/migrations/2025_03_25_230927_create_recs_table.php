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
        Schema::create('recs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contribuyente_id')->constrained('contribuyentes')->onDelete('cascade');
            $table->boolean('REC_NOMINA')->nullable();
            $table->boolean('REC_CEDULAR')->nullable();
            $table->boolean('REC_CONTAMINANTES_AGUA')->nullable();
            $table->boolean('REC_HOSPEDAJE')->nullable();
            $table->boolean('REC_PROFESIONAL')->nullable();
            $table->boolean('REC_CONTAMINANTES_AIRE')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recs');
    }
};
