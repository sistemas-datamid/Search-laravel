<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contribuyente extends Model
{
    use HasFactory;

    protected $fillable = [
        'RFC',
        'CURP',
        'REC',
        'Excel_id',
        'Activo',
        'Primer_Apellido',
        'Segundo_Apellido',
        'Razon_Social',
        'Fecha_Alta',
        'Hora_Alta',
        'Clave_Actividad',
        'Actividad_Fiscal',
        'Inicio_Operaciones'
    ];

    public function direcciones()
    {
        return $this->hasMany(Direccion::class);
    }
}
