<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClimaOrganizacionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->insert([
            'nombre' => 'clima organizacional',
            'tiempoRealizado' =>  date('0:15:0'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('generos')->insert([
            'nombre' => 'Femenino',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('generos')->insert([
            'nombre' => 'Masculino',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('rangoEdad')->insert([
            'nombre' => '18 - 25',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('rangoEdad')->insert([
            'nombre' => '26 - 35',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('rangoEdad')->insert([
            'nombre' => '36 - 40',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('rangoEdad')->insert([
            'nombre' => '41 - 50',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('rangoEdad')->insert([
            'nombre' => '51 - 60',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('rangoEdad')->insert([
            'nombre' => '60 o más',
            'created_at' => now(),
            'updated_at' => now()
        ]); 

        DB::table('anosServicio')->insert([
            'nombre' => '1 - 5',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('anosServicio')->insert([
            'nombre' => '6 - 10',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('anosServicio')->insert([
            'nombre' => '11 - 15',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('anosServicio')->insert([
            'nombre' => '16 - 20',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('anosServicio')->insert([
            'nombre' => '21 - 25',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('anosServicio')->insert([
            'nombre' => '26 - 30',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('anosServicio')->insert([
            'nombre' => '31 - 35',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('anosServicio')->insert([
            'nombre' => '36 - 40',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('anosServicio')->insert([
            'nombre' => '41 o más',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('tipoRespuestas')->insert([
            'nombre' => 'opción multiple',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Respuestas
        
        DB::table('respuestas')->insert([
            'nombre' => 'Siempre',
            'tipo_id' => 1,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('respuestas')->insert([
            'nombre' => 'A veces',
            'tipo_id' => 1,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('respuestas')->insert([
            'nombre' => 'Nunca',
            'tipo_id' => 1,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Preguntas

        DB::table('preguntas')->insert([
            'nombre' => 'Me siento orgulloso de pertenecer a la institución y la recomendarías como un buen lugar para trabajar.',
            'posicion' => 1,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('preguntas')->insert([
            'nombre' => 'De haber sabido cómo iban a ser las cosas en la organización, ¿Hubieras entrado en ella?',
            'posicion' => 2,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Si te ofrecen otro empleo con igual salario y condiciones, ¿te quedarías en el IEBEM?',
            'posicion' =>3,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Cuando escuchas alguna opinión negativa sobre la organización, haces lo posible por cambiarle el criterio a quien lo emitió.',
            'posicion' => 4,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'La comunicación que se da entre los compañeros de trabajo es abierta, clara y oportuna.',
            'posicion' => 5,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'La comunicación informal dentro de la organización es positiva y sana.',
            'posicion' => 6,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'En la institución se respeta la comunicación a través de los niveles de dirección.',
            'posicion' => 7,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Se reciben las mismas orientaciones por parte del jefe inmediato y de los máximos directivos.',
            'posicion' => 8,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Te mantienen informado de los que está pasando en la organización.',
            'posicion' => 9,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Te dan a conocer tus funciones y objetivos de trabajo',
            'posicion' => 10,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Confías en las actitudes de tu jefe inmediato',
            'posicion' => 11,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Confías en las actitudes de los directivos de la institución.',
            'posicion' => 12,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Confías en las actitudes de tus compañeros de trabajo.',
            'posicion' => 13,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Cuando aparecen desacuerdos entre los trabajadores y los directivos por asuntos de trabajo, se reconocen y respetan todos los puntos de vista.',
            'posicion' => 14,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Cuando hay un conflicto entre los trabajadores y la organización, esto se resuelve satisfactoriamente por ambos.',
            'posicion' => 15,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Tu trabajo es importante para los resultados de la organización.',
            'posicion' => 16,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Tus funciones te permiten hacer uso de tus habilidades y conocimientos.',
            'posicion' => 17,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Las funciones y objetivos de tu puesto contribuyen a tu crecimiento personal y profesional.',
            'posicion' => 18,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Se realizan actividades recreativas, culturales y deportivas, suficientes para que el personal participe y se integre.',
            'posicion' => 19,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Desde que ingresaste al IEBEM, ¿haz recibido capacitación?',
            'posicion' => 20,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'La capacitación que has recibido, te ha servido para mejorar tu trabajo.',
            'posicion' => 21,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Existen posibilidades reales de promoción o ascenso en la institución.',
            'posicion' => 22,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Se dan a conocer los procedimientos para la evaluación del  desempeño laboral.',
            'posicion' => 23,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Se conocen los indicadores para la evaluación del desempeño  laboral.',
            'posicion' => 24,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'El proceso de evaluación del desempeño es justo y objetivo.',
            'posicion' => 25,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Los resultados impulsan el desarrollo dentro de la organización,  así como ascensos y formación.',
            'posicion' => 26,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Cuando existe un problema de trabajo, se cuenta con la opinión de los involucrados para tomar decisiones.',
            'posicion' => 27,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'En tu área de trabajo se llevan a cabo las funciones y resultados como un equipo de trabajo.',
            'posicion' => 28,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Cuando tienes algún problema personal, tus compañeros te apoyan  mientras lo resuelves.',
            'posicion' => 29,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Se fomenta la colaboración entre los subordinados y directivos para realizar las actividades',
            'posicion' => 30,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Cuando se realizan tareas en equipo, todos asumen la responsabilidad del resultado.',
            'posicion' => 31,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => '¿Los estímulos materiales se aplican de forma justa?',
            'posicion' => 32,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Los estímulos morales (diplomas, reconocimientos públicos) se aplican de manera justa.',
            'posicion' => 33,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Para promociones de puesto o sueldo, cuentan más los resultados de trabajo que las relaciones amistosas.',
            'posicion' => 34,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Los directivos reconocen cuando alguien está haciendo bien su trabajo y se lo expresan.',
            'posicion' => 35,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Las normas de seguridad con las que cuenta la institución, protegen tu integridad física',
            'posicion' => 36,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'La limpieza e higiene de tu lugar de trabajo son adecuadas',
            'posicion' => 37,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'La iluminación en tu área de trabajo es la adecuada para la realización de tus funciones.',
            'posicion' => 38,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'En el IEBEM existen instalaciones adecuadas para personas con discapacidad.',
            'posicion' => 39,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'La ventilación en tu área de trabajo es la adecuada para la realización de tus funciones.',
            'posicion' => 40,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Dispongo de los materiales y el equipamiento que necesito para hacer correctamente mi trabajo.',
            'posicion' => 41,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Tus jefes o directivos te tratan bien, con amabilidad y respeto.',
            'posicion' => 42,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Los directivos alientan la participación de los trabajadores en la toma de decisiones para el desempeño de mis funciones.',
            'posicion' => 43,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Tienes suficiente autonomía en tu trabajo, te dejan hacer en correspondencia con tu puesto o funciones.',
            'posicion' => 44,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Los directivos se preocupan por el desempeño del trabajo y  orientan cómo mejorarlo.',
            'posicion' => 45,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Tienes confianza en tu jefe inmediato para hacerle alguna propuesta de mejora en cuanto a las actividades.',
            'posicion' => 46,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Los directivos trabajan con sus colaboradores para el logro de las  metas.',
            'posicion' => 47,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Se identifican y reconocen líderes por su capacidad para desempeñar su trabajo.',
            'posicion' => 48,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'La institución aprovecha tu liderazgo o el de algunos de tus  compañeros en su beneficio y en el de todos.',
            'posicion' => 49,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'El tiempo asignado para cada tarea es suficiente.',
            'posicion' => 50,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'El trabajo se distribuye equitativamente para todos.',
            'posicion' => 51,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'El ambiente de trabajo es agradable y relajado, pero sin perder la disciplina laboral.',
            'posicion' => 52,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Las tareas y responsabilidades están organizadas claramente.',
            'posicion' => 53,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('preguntas')->insert([
            'nombre' => 'Se respeta tu horario de trabajo.',
            'posicion' => 54,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('preguntas')->insert([
            'nombre' => 'Los directivos te comprometen y te apoyan cuando tienes algún problema personal y familiar.',
            'posicion' => 55,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('preguntas')->insert([
            'nombre' => 'La presión de tu trabajo, la puedes manejar sin dificultades.',
            'posicion' => 56,
            'evento_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Tabla para Discapacidad

        DB::table('discapacidades')->insert([
            'nombre' => 'No',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('discapacidades')->insert([
            'nombre' => 'Motriz',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('discapacidades')->insert([
            'nombre' => 'Visual',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('discapacidades')->insert([
            'nombre' => 'Auditiva',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('discapacidades')->insert([
            'nombre' => 'Otra',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        

        //relacionando las preguntas con las respuestas

        for ($i = 1; $i <= 56; $i++) {
            DB::table('preguntasRespuestas')->insert([
                'preguntas_id' => $i,
                'respuestas_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ]);

            DB::table('preguntasRespuestas')->insert([
                'preguntas_id' => $i,
                'respuestas_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ]);

            DB::table('preguntasRespuestas')->insert([
                'preguntas_id' => $i,
                'respuestas_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }


    }
}
