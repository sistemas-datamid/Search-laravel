<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contribuyente extends Model
{
    use HasFactory;

    protected $fillable = [
        'rfc',
        'curp',
        'primer_apellido',
        'excel_id'
    ]; 
}
