<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'direcciones'; 

    protected $fillable = [
        'contribuyente_id', 'Calle', 'Numero_Exterior', 'Numero_Interior', 
        'Cruzamientos', 'Codigo_Postal', 'Colonia', 'Localidad', 'Municipio', 'Entidad_Federativa'
    ];

    public function contribuyente()
    {
        return $this->belongsTo(Contribuyente::class);
    }
}
