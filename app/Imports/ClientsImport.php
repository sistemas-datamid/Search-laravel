<?php

namespace App\Imports;

use App\Models\Client;
use App\Models\Contribuyente;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class ClientsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {



        DB::transaction(function () use ($row) {
            $fechaAlta = '2022-03-01';
         
            Contribuyente::create([
                'RFC' => $row['rfc'],  
                'CURP' => $row['curp'],  
                'REC' => $row['rec'], 
                'Excel_id' => $row['id'], 
                'Activo' => $row['activo'],  
                'Primer_Apellido' => $row['primer_apellido'], 
                'Segundo_Apellido' => $row['segundo_apellido'], 
                'Razon_Social' => $row['nombre_o_razon_social'],  
                'Fecha_Alta' => $fechaAlta, 
                'Hora_Alta' => $row['hora_alta'], 
                'Clave_Actividad' => $row['clave_actividad'], 
                'Actividad_Fiscal' => $row['actividad_fiscal'],  
            ]);
            
            // Client::create([
            //     'name' => $row['name'],
            //     'email' => $row['email'],
            //     'phone' => $row['phone'],
            //     'address' => $row['address'],
            // ]);
        });
    }
}
