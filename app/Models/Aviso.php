<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    use HasFactory;

    protected $fillable = [
        'contribuyente_id', 'Fecha_Primer_Aviso', 'Primer_Aviso', 
        'Fecha_Ultimo_Aviso', 'Ultimo_Aviso'
    ];

    public function contribuyente()
    {
        return $this->belongsTo(Contribuyente::class);
    }
}
