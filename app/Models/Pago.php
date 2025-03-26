<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'contribuyente_id', 'Fecha_Ultimo_Pago', 'MES_Ultimo_Pago', 
        'Importe_Ultimo_Pago', 'Padron_Ultimo_Pago', 'Periodo_Presentado'
    ];

    public function contribuyente()
    {
        return $this->belongsTo(Contribuyente::class);
    }
}
