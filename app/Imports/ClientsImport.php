<?php

namespace App\Imports;

use App\Models\Client;
use App\Models\Contribuyente;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ClientsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $contribuyente = new Contribuyente([
            'rfc' => $row['rfc'],   
            'curp' => $row['curp'],
            'primer_apellido' => $row['primer_apellido'],
            'excel_id' => $row['excel_id'],
        ]);
        
        $contribuyente->save();
        
        return $contribuyente;
    }
}
