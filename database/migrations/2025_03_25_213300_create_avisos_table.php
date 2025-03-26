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
        Schema::create('avisos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contribuyente_id')->constrained('contribuyentes')->onDelete('cascade');
            $table->date('Fecha_Primer_Aviso');
            $table->text('Primer_Aviso')->nullable();
            $table->date('Fecha_Ultimo_Aviso');
            $table->text('Ultimo_Aviso')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avisos');
    }
};
