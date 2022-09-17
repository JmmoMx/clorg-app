@extends('layouts.app')

@section('titulo')
    Inicio
@endsection

    @section('contenido')
        <div class="md:flex md:h-screen md:justify-center md:gap-10 md:items-center ">
            {{-- PARA TODAS LAS RESOLUCIONES --}}
            {{-- <div class="h-8 sm:h-12 md:h-16 lg:h-20 xl:h-24 w-32 bg-gray-400"></div> --}}

            <div class="md:w-8/12 bg-white p-6 rounded-lg shadow-xl">
                <div class="">
                    <div class="container">
                        <center>
                            <p class="text-3xl font-black">Bienvenidos</p>
                            <p><br>Como parte de las atribuciones señaladas en el Artículo 30 Fracción XXXIII del Estatuto orgánico del Instituto de la 
                                Educación Básica del Estado de Morelos (IEBEM), es responsabilidad de este Instituto a través de la Dirección de 
                                Planeación Educativa, llevar a cabo estudios y diagnósticos organizacionales, así como levantamientos de clima y cultura 
                                laboral en oficinas centrales y regionales. Esto con el objetivo de buscar estrategias que permitan desarrollar la 
                                cultura organizacional, mejorar la calidad de los servicios y así satisfacer a los receptores de los mismos; buscar la 
                                efectividad de los procesos y procedimientos que se llevan a cabo y fortalecer el crecimiento y satisfacción de todo 
                                el personal adscrito al IEBEM.<br><br></p>

                            <p>Esta encuesta permite conocer tu percepción y sentir respecto aquellos factores que conforman tu entorno laboral y que 
                                facilitan o dificultan tu desempeño. Por eso, tu opinión es importante, por lo que te solicitamos tu colaboración 
                                contestando con objetividad todas las preguntas.<br><br></p>
                            
                            <p>Tu participación en este ejercicio es de vital importancia, pues permitirá diseñar estrategias que beneficien el clima 
                                organizacional de todo el personal y se busque mejorar los procesos que se llevan a cabo.<br><br></p>

                            <p><b>Este cuestionario es anónimo</b> y tiene como objeto, evaluar el clima organizacional en el IEBEM.<br><br><br></p>
                            
                            <p>¡Muchas gracias por tu cooperación!</p>
                        </center>
                        <div>
                            <a href="{{ route('climOrg.index') }}"><button class="float-right bg-blue-300 shadow-md ml-2 border border-black rounded hover:bg-blue text-sm px-4 py-1 text-gray-700 focus:text-white hover:text-white focus:ring focus:ring-blue focus:bg-blue focus:outline-none focus:ring-opacity-50 flex items-center uppercase"><i class="far fa-eye"></i>&nbsp;Siguiente</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    
    
