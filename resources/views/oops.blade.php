@extends('layouts.appOops')

    @section('contenido')
    {{-- <img class="block w-20" src="{{url('/images/logo_miportalCX_800px.png')}}" alt="logo" /> --}}
    {{-- <h1 class="text-center text-4xl">Clima Organizacional </h1> --}}
    <div class="md:w-12/12 bg-white p-6 rounded-lg shadow-xl my-40">
    <div class="container">
        <p class="text-xl mt-5">
            Oops... Hubo un problema con tu petición.
        </p>
        <p class="text-xl text-center my-1 w-2/3">
            {{ $msg }}
        </p>
        <button type="button" class="bg-gray-700 block mx-auto md:w-1/5 sm:w-3/5 hover:bg-gray-600 text-gray-100 font-bold p-3 mt-5 focus:outline-none focus:shadow-outline rounded" onClick="window.history.back()">Volver a la aplicación</button>
    </div>
    </div>
    @endsection('contenido')