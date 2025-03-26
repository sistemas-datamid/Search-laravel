<?php

namespace App\Imports;

use App\Models\Client;
use App\Models\Contribuyente;
use App\Models\Direccion;
use App\Models\Aviso;
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
            $inicioOperaciones = Carbon::parse($row['inicio_de_operaciones'])->translatedFormat('Y-m-d');
            $activo = ($row['activo'] == 'Si') ? 1 : 0;

            $fechaPrimerAviso = Carbon::parse($row['fecha_primer_aviso'])->translatedFormat('Y-m-d');
            $fechaUltimoAviso = Carbon::parse($row['fecha_ultimo_aviso'])->translatedFormat('Y-m-d');
  

          

            $contribuyente = Contribuyente::create([
                'RFC' => $row['rfc'],
                'CURP' => $row['curp'],
                'REC' => $row['rec'],
                'Excel_id' => $row['id'],
                'Activo' =>  $activo,
                'Primer_Apellido' => $row['primer_apellido'],
                'Segundo_Apellido' => $row['segundo_apellido'],
                'Razon_Social' => $row['nombre_o_razon_social'],
                'Fecha_Alta' => $fechaAlta,
                'Hora_Alta' => $row['hora_alta'],
                'Clave_Actividad' => $row['clave_actividad'],
                'Actividad_Fiscal' => $row['actividad_fiscal'],
                'Inicio_Operaciones' => $inicioOperaciones
            ]);

            Direccion::create([
                'contribuyente_id' => $contribuyente->id,
                'Calle' => $row['calle'],
                'Numero_Exterior' => $row['numero_exterior'],
                'Numero_Interior' => $row['numero_interior'],
                'Cruzamientos' => $row['cruzamientos'],
                'Codigo_Postal' => $row['codigo_postal'],
                'Colonia' => $row['colonia'],
                'Localidad' => $row['localidad'],
                'Municipio' => $row['municipio'],
                'Entidad_Federativa' => $row['entidad_federativa'],
            ]);

            Direccion::create([
                'contribuyente_id' => $contribuyente->id,
                'Calle' => $row['calle'],
                'Numero_Exterior' => $row['numero_exterior'],
                'Numero_Interior' => $row['numero_interior'],
                'Cruzamientos' => $row['cruzamientos'],
                'Codigo_Postal' => $row['codigo_postal'],
                'Colonia' => $row['colonia'],
                'Localidad' => $row['localidad'],
                'Municipio' => $row['municipio'],
                'Entidad_Federativa' => $row['entidad_federativa'],
            ]);

              // // Crear pago asociado al contribuyente
        // Pago::create([
        //     'ID_Contribuyente' => $contribuyente->ID,
        //     'Fecha_Ultimo_Pago' => $row['fecha_ultimo_pago'],
        //     'MES_Ultimo_Pago' => $row['mes_ultimo_pago'],
        //     'Importe_Ultimo_Pago' => $row['importe_ultimo_pago'],
        //     'Padron_Ultimo_Pago' => $row['padron_ultimo_pago'],
        //     'Periodo_Presentado' => $row['periodo_presentado'],
        // ]);

        // // Crear aviso asociado al contribuyente
        Aviso::create([
            'contribuyente_id' => $contribuyente->id,
            'Fecha_Primer_Aviso' => $fechaPrimerAviso,
            'Primer_Aviso' =>  $row['primer_aviso'],
            'Fecha_Ultimo_Aviso' => $fechaUltimoAviso,
            'Ultimo_Aviso' =>  $row['ultimo_aviso'],
        ]);

         // // Crear NotariaCIEE asociado al contribuyente
        // NotariaCIEE::create([
        //     'ID_Contribuyente' => $contribuyente->ID,
        //     'Num_Notaria' => $row['num_notaria'],
        //     'Tiene_CIEE' => $row['tiene_ciee'],
        // ]);

        // // Crear UsuarioAsesor asociado al contribuyente
        // UsuarioAsesor::create([
        //     'ID_Contribuyente' => $contribuyente->ID,
        //     'Usuario_o_Asesor' => $row['usuario_o_asesor'],
        //     'REC_NOMINA' => $row['rec_nomina'],
        //     'REC_CEDULAR' => $row['rec_cedular'],
        //     'REC_CONTAMINANTES_AGUA' => $row['rec_contaminantes_agua'],
        //     'REC_HOSPEDAJE' => $row['rec_hospedaje'],
        //     'REC_PROFESIONAL' => $row['rec_profesional'],
        //     'REC_CONTAMINANTES_AIRE' => $row['rec_contaminantes_aire'],
        // ]);

        });

        return;
    }
}
