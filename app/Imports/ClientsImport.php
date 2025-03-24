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


            $fechaAlta = Carbon::parse($row['fecha_alta_base_datos'])->translatedFormat('Y-m-d');

            // dd([
            //     'RFC' => $row['rfc'],
            //     'CURP' => $row['curp'],
            //     'REC' => $row['rec'],
            //     'Excel_id' => $row['id'],
            //     'Activo' => $row['activo'],
            //     'Primer_Apellido' => $row['primer_apellido'],
            //     'Segundo_Apellido' => $row['segundo_apellido'],
            //     'Razon_Social' => $row['nombre_o_razon_social'],
            //     'Fecha_Alta' => $fechaAlta,
            //     'Hora_Alta' => $row['hora_alta'],
            //     'Clave_Actividad' => $row['clave_actividad'],
            //     'Actividad_Fiscal' => $row['actividad_fiscal'],
            // ]);

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
