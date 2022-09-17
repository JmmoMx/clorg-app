@extends('layouts.app')

@section('titulo')
    Inicio
@endsection

    @section('contenido')
        {{-- <form class="w-60 sm:w-full max-w-3xl mx-auto bg-white shadow-lg border rounded pl-4 pr-4 pb-4 pt-2" method="POST" action="{{route('climOrg.store')}}" enctype="multipart/form-data" novalidate>
            @csrf --}}
            {{-- @method('put') --}}
            <div class="md:flex md:h-screen md:justify-center md:gap-10 md:items-center">
            <div class="md:w-8/12 bg-white p-6 rounded-lg shadow-xl">
                <div class="card">
                    <div class="container" id="pregunta">
                        {{-- <center> --}}
                            {{-- <h4><b>Clima organizacional</b></h4> --}}
                            {{-- @foreach ($preguntasd as $preguntasd)
                            <p><b>{{$preguntasd->nombre}}</b></p>
                            @endforeach --}}
                            {{-- <p id="pregunta"></p>
                            <div class="row">
                                <div class="col s4 m4 l4">
                                    <p><input type="radio" name="respuestaPregunta" id="Siempre" value="1" > Siempre</p>
                                </div>
                                <div class="col s4 m4 l4">
                                    <p><input type="radio" name="respuestaPregunta" id="Aveces" value="2" > A veces</p>
                                </div>
                                <div class="col s4 m4 l4">
                                    <p><input type="radio" name="respuestaPregunta" id="Nunca" value="3" >Nunca</p>
                                </div>
                            </div>
                            
                        </center> --}}
                        <div>
                            {{-- <a href="{{ route('climOrg.index') }}"><button style="background: #98d4ff; float:right; margin-bottom:10px;" class="shadow-md ml-2 border border-black rounded bg-gray-900 hover:bg-amarilloIzzi text-sm px-4 py-1 text-yellow-700 focus:text-white hover:text-white focus:ring focus:ring-amarilloIzzi focus:bg-amarilloIzzi focus:outline-none focus:ring-opacity-50 flex items-center uppercase"><i class="far fa-eye"></i>&nbsp;Siguiente</button></a> --}}
                            <button style="background: #98d4ff; float:right; margin-bottom:10px;" type="submit" class="rounded uppercase border border-green-700 bg-white hover:bg-green-500 text-green-700 hover:text-white px-2 py-1 focus:outline-none focus:ring focus focus:ring-green-500 focus:ring-opacity-50 flex items-center"><i class="far fa-check-circle "></i>&nbsp;Siguiente</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        {{-- </form> --}}
    @endsection