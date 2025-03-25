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
        Schema::create('contribuyentes', function (Blueprint $table) {
            $table->id();
            $table->string('RFC');
            $table->string('CURP')->nullable();
            // $table->string('RFC')->unique();
            // $table->string('CURP')->unique();
            $table->integer('REC');
            $table->integer('Excel_id');
            $table->boolean('Activo')->default(true);
            $table->string('Primer_Apellido');
            $table->string('Segundo_Apellido')->nullable();
            $table->string('Razon_Social');
            $table->date('Fecha_Alta');
            $table->time('Hora_Alta');
            $table->string('Clave_Actividad');
            $table->string('Actividad_Fiscal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribuyentes');
    }
};
