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
                            <p class="text-3xl font-black">¡Gracias por tu participación!</p>
                            <p><br>La suma de todos permitirá mejorar las condiciones del IEBEM y fortalecer los servicios que ofrece.</p>
                        </center>
                        <div>
                            <a href="{{  url('/') }}"><button class="float-right bg-blue-300 shadow-md ml-2 border border-black rounded hover:bg-blue text-sm px-4 py-1 text-gray-700 focus:text-white hover:text-white focus:ring focus:ring-blue focus:bg-blue focus:outline-none focus:ring-opacity-50 flex items-center uppercase"><i class="far fa-eye"></i>&nbsp;Finalizar</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    
    
