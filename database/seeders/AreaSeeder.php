<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'nombre' => 'DIRECCIÓN GENERAL',
            'clave' => '1000',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'nombre' => 'DIRECCIÓN DE EDUCACIÓN ELEMENTAL',
            'clave' => '2000',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'nombre' => 'DIRECCIÓN DE EDUCACIÓN PRIMARIA',
            'clave' => '3000',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'nombre' => 'DIRECCIÓN DE EDUCACIÓN SECUNDARIA',
            'clave' => '4000',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'nombre' => 'DIRECCIÓN DE DESARROLLO EDUCATIVO',
            'clave' => '5000',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'nombre' => 'DIRECCIÓN DE ADMINISTRACIÓN',
            'clave' => '6000',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'nombre' => 'DIRECCIÓN DE PERSONAL Y RELACIONES LABORALES',
            'clave' => '7000',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'nombre' => 'DIRECCIÓN DE PLANEACIÓN EDUCATIVA',
            'clave' => '8000',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'nombre' => 'DIRECCIÓN JURÍDICA',
            'clave' => '9000',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // DIRECCIÓN GENERAL

        DB::table('subAreas')->insert([
            'nombre' => 'OFICINA DE LA DIRECCIÓN',
            'clave' => '1000',
            'areas_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'OFICINA DE LA DIRECCIÓN',
            'clave' => '2000',
            'areas_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'OFICINA DE LA DIRECCIÓN',
            'clave' => '3000',
            'areas_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'OFICINA DE LA DIRECCIÓN',
            'clave' => '4000',
            'areas_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'OFICINA DE LA DIRECCIÓN',
            'clave' => '5000',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'OFICINA DE LA DIRECCIÓN',
            'clave' => '6000',
            'areas_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'OFICINA DE LA DIRECCIÓN',
            'clave' => '7000',
            'areas_id' => 7,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'OFICINA DE LA DIRECCIÓN',
            'clave' => '8000',
            'areas_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'OFICINA DE LA DIRECCIÓN',
            'clave' => '9000',
            'areas_id' => 9,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORD. DE COMUNICACIÓN SOCIAL',
            'clave' => '1001',
            'areas_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORDINACION DEL SISTEMA DE DOCUMENTOS Y ARCHIVOS',
            'clave' => '1002',
            'areas_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'DIRECCIÓN  UNIDAD 17-A DE UPN',
            'clave' => '1200',
            'areas_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'CUERNAVACA',
            'clave' => '1201',
            'areas_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'CUAUTLA',
            'clave' => '1202',
            'areas_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'GALEANA',
            'clave' => '1203',
            'areas_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'COMISARIA PÚBLICA',
            'clave' => '1300',
            'areas_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE CONTROL Y EVALUACION COMISARIA',
            'clave' => '1310',
            'areas_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE REVISIONES COMISARIA',
            'clave' => '1320',
            'areas_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);       
        
        // DIRECCIÓN DE EDUCACIÓN ELEMENTAL
        
        DB::table('subAreas')->insert([
            'nombre' => 'COORD. EDUCACIÓN INICIAL',
            'clave' => '2002',
            'areas_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'COORD. INGLÉS',
            'clave' => '2005',
            'areas_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE EDUCACIÓN ESPECIAL',
            'clave' => '2010',
            'areas_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE EDUCACIÓN PREESCOLAR',
            'clave' => '2020',
            'areas_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE INCLUSIÓN Y EQUIDAD',
            'clave' => '2030',
            'areas_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'COORD. EDUCACIÓN INDIGENA',
            'clave' => '2031',
            'areas_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'COORD. EDUCACIÓN PARA ADULTOS',
            'clave' => '2032',
            'areas_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // DIRECCIÓN DE EDUCACIÓN PRIMARIA
        
        DB::table('subAreas')->insert([
            'nombre' => 'SUBDIRECCIÓN DE EDUCACION FÍSICA',
            'clave' => '3100',
            'areas_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO APOYO TECNICO ',
            'clave' => '3110',
            'areas_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE APOYO A LA EXCELENCIA ',
            'clave' => '3120',
            'areas_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // DIRECCIÓN DE EDUCACIÓN SECUNDARIA

        DB::table('subAreas')->insert([
            'nombre' => 'SECUNDARIAS',
            'clave' => '4010',
            'areas_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'SECUNDARIAS TÉCNICAS',
            'clave' => '4020',
            'areas_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'TELESECUNDARIAS',
            'clave' => '4030',
            'areas_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'NORMALES',
            'clave' => '4040',
            'areas_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // DIRECCIÓN DE DESARROLLO EDUCATIVO

        DB::table('subAreas')->insert([
            'nombre' => 'COORD. PROGRAMA ESCUELA SANA (VER BIEN PARA APRENDER MEJOR)',
            'clave' => '5001',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORDINACION DE CONSEJOS DE PARTICIPACION SOCIAL ',
            'clave' => '5002',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORDINACION CENTRO DE ACTULIZACION DEL MAGISTERIO CAM',
            'clave' => '5003',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORDINACION DE ARTE Y CULTURA',
            'clave' => '5004',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('subAreas')->insert([
            'nombre' => 'COORD. CENTRO DE MAESTROS CUERNAVACA 01',
            'clave' => '5005',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORD. CENTRO DE MAESTROS CUAUTLA 02',
            'clave' => '5005.1',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORD. CENTRO DE MAESTROS TEMIXCO 03',
            'clave' => '5005.2',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORD. CENTRO DE MAESTROS MIACATLAN 04',
            'clave' => '5005.3',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('subAreas')->insert([
            'nombre' => 'COORD. CENTRO DE MAESTROS JONACATEPEC 05',
            'clave' => '5005.4',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORD. CENTRO DE MAESTROS JOJUTLA 06',
            'clave' => '5005.5',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'SUBDIRECCIÓN  DE MEJORA EDUCATIVA',
            'clave' => '5100',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE ACTUALIZACION MAGISTERIAL ',
            'clave' => '5110',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE PROYECTOS EDUCATIVOS',
            'clave' => '5120',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE TECNOLOGIAS DE LA INFORMACION EDUCATIVA',
            'clave' => '5130',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE DESARROLLO SUSTENTABLE',
            'clave' => '5140',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE CONVIVENCIA ESCOLAR ',
            'clave' => '5150',
            'areas_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // DIRECCIÓN DE ADMINISTRACIÓN

        DB::table('subAreas')->insert([
            'nombre' => 'DEPTO. DE ADQUISICIONES',
            'clave' => '6010',
            'areas_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE SERVICIOS',
            'clave' => '6020',
            'areas_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'SUBDIRECCIÓN DE FINANZAS',
            'clave' => '6100',
            'areas_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORDINACION DE FISCALIZACION ',
            'clave' => '6101',
            'areas_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORDINACION DE PROGRAMAS FEDERALES ',
            'clave' => '6102',
            'areas_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPTO. DE CONTABILIDAD',
            'clave' => '6110',
            'areas_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPTO. DE TESORERÍA',
            'clave' => '6120',
            'areas_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'SUBDIRECCIÓN DE SERVICIOS REGIONALES',
            'clave' => '6200',
            'areas_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPTO. DE SERVICIOS REGIONALES ALPUYECA',
            'clave' => '6210',
            'areas_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPTO. SE SERVICIOS REGIONALES CUAUTLA',
            'clave' => '6220',
            'areas_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPTO. DE SERVICIOS REGIONALES JOJUTLA',
            'clave' => '6230',
            'areas_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPTO. DE SERVICIOS REGIONALES JONACATEPEC',
            'clave' => '6240',
            'areas_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPTO. DE SERVICIOS REGIONALES YAUTEPEC',
            'clave' => '6250',
            'areas_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // DIRECCIÓN DE PERSONAL Y RELACIONES LABORALES

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE ADMINISTRACION DE PERSONAL ',
            'clave' => '7010',
            'areas_id' => 7,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE PAGOS',
            'clave' => '7020',
            'areas_id' => 7,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE TRAMITES Y DESARROLLO DE PERSONAL',
            'clave' => '7030',
            'areas_id' => 7,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORDINACION DE CAPACITACION ',
            'clave' => '7031',
            'areas_id' => 7,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'SUBDIRECCIÓN DE INFORMÁTICA',
            'clave' => '7100',
            'areas_id' => 7,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'SERVICIOS DE COMPUTO',
            'clave' => '7110',
            'areas_id' => 7,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPTO. DE INGERÍA SE SISTEMAS',
            'clave' => '7120',
            'areas_id' => 7,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'SUBDIRECCION DEL SISTEMA PARA LA CARREA DE LAS MAESTRAS Y MAESTROS ',
            'clave' => '7200',
            'areas_id' => 7,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE RECONOCIMIENTO DOCENTE ',
            'clave' => '7210',
            'areas_id' => 7,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // DIRECCIÓN DE PLANEACIÓN EDUCATIVA

        DB::table('subAreas')->insert([
            'nombre' => 'SUBDIRECCIÓN DE PROGRAMACIÓN',
            'clave' => '8100',
            'areas_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORDINACIÓN DE BECAS',
            'clave' => '8101',
            'areas_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPTO. PROGRAMACIÓN Y PRESUPUESTO',
            'clave' => '8110',
            'areas_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE ESTUDIOS EDUCATIVOS',
            'clave' => '8120',
            'areas_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORD. INFRAESTRUCTURA EDUCATICA',
            'clave' => '8121',
            'areas_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE DESARROLLO ORGANIZACIONAL',
            'clave' => '8130',
            'areas_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'SUBDIRECCION DE ACREDITACION, INCORPORACION, REVALIDACION Y EVALUACION ',
            'clave' => '8200',
            'areas_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE INDICADORES EDUCATIVOS ',
            'clave' => '8210',
            'areas_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE CONTROL ESCOLAR ',
            'clave' => '8220',
            'areas_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'COORD. PROGRAMA BINACIONAL DE EDUCACIÓN MIGRANTE',
            'clave' => '8221',
            'areas_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'SUBDIRECCION DE VINCULACIÓN Y ENLACE',
            'clave' => '8300',
            'areas_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        //DIRECCIÓN JURÍDICA

        DB::table('subAreas')->insert([
            'nombre' => 'SUBDIRECCIÓN DE DERECHOS HUMANOS, LABORALES Y PROCESOS',
            'clave' => '9100',
            'areas_id' => 9,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE DERECHOS HUMANOS NORMATIVIDAD Y PROCESOS',
            'clave' => '9110',
            'areas_id' => 9,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subAreas')->insert([
            'nombre' => 'DEPARTAMENTO DE ASUNTOS LABORALES, CONTRATOS Y CONVENIOS',
            'clave' => '9120',
            'areas_id' => 9,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Categoria del persoanal

        DB::table('categoriaPersonal')->insert([
            'clave' => 'G1',
            'nombre' => 'Dirección General, Directores y UPN',
            'created_at' =>  now(),
            'updated_at' =>  now(),
        ]);
        
        DB::table('categoriaPersonal')->insert([
            'clave' => 'G2',
            'nombre' => 'Subdirectores y Jefes de Departamento',
            'created_at' =>  now(),
            'updated_at' =>  now(),
        ]);
        
        DB::table('categoriaPersonal')->insert([
            'clave' => 'G3',
            'nombre' => 'Coordinadores',
            'created_at' =>  now(),
            'updated_at' =>  now(),
        ]);
        
        DB::table('categoriaPersonal')->insert([
            'clave' => 'G4',
            'nombre' => 'Personal Operativo por Honorarios',
            'created_at' =>  now(),
            'updated_at' =>  now(),
        ]);
        
        DB::table('categoriaPersonal')->insert([
            'clave' => 'G5',
            'nombre' => 'Personal Operativo de Base',
            'created_at' =>  now(),
            'updated_at' =>  now(),
        ]);
        
        DB::table('categoriaPersonal')->insert([
            'clave' => 'G6',
            'nombre' => 'Personal Operativo de Confianza',
            'created_at' =>  now(),
            'updated_at' =>  now(),
        ]);

        DB::table('categoriaPersonal')->insert([
            'clave' => 'G7',
            'nombre' => 'Personal Docente',
            'created_at' =>  now(),
            'updated_at' =>  now(),
        ]);
    }
}
