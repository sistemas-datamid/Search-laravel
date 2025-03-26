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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contribuyente_id')->constrained('contribuyentes')->onDelete('cascade');
            $table->date('Fecha_Ultimo_Pago');
            $table->integer('MES_Ultimo_Pago');
            $table->decimal('Importe_Ultimo_Pago', 10, 2);
            $table->string('Padron_Ultimo_Pago', 20);
            $table->string('Periodo_Presentado', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
