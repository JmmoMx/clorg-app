@extends('layouts.app')

@section('titulo')
    Comenzamos
@endsection

@section('contenido')
    <form class="md:flex md:h-screen md:justify-center md:gap-10 md:items-center " method="POST"
        action="{{ route('climOrg.store') }}" enctype="multipart/form-data" novalidate id="add-infomscion-form">
        @csrf
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        {{-- @method('put') --}}
        <div class="md:w-8/12 bg-white p-6 rounded-lg shadow-xl">
            <div class="card" id="olo" >
                <div class="container">
                    <h4 class="font-black">Evaluar</h4>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="evDir">
                                Dirección
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full 
                                            bg-gray-200 border border-gray-200 text-gray-700 
                                            py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                                            focus:bg-white focus:border-gray-500 @if ($errors->has('evDir')) border-red-700 @endif"
                                    id="evDir" name="evDir">
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($area as $area)
                                        <option value="{{ $area->id }}"
                                            {{ old('evDir') == $area->id ? 'selected' : '' }}>{{ $area->nombre }} -
                                            {{ number_format($area->clave) }}</option>
                                    @endforeach
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="bg-red-100 border-l-4 border-red-500 text-orange-700 p-2 invisible"
                                    role="alert" id="error-evDir"></div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="evSub">
                                SubDirección o Departamento
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full 
                                        bg-gray-200 border border-gray-200 text-gray-700 
                                        py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                                        focus:bg-white focus:border-gray-500"
                                    id="evSub" name="evSub" @if ($errors->has('evSub')) border-red-700 @endif>
                                    <option value="">-- Seleccione --</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="bg-red-100 border-l-4 border-red-500 text-orange-700 p-2 invisible"
                                    role="alert" id="error-evSub"></div>
                            </div>
                        </div>
                        {{-- <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="evClas">
                                Clasificado
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full 
                                        bg-gray-200 border border-gray-200 text-gray-700 
                                        py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                                        focus:bg-white focus:border-gray-500"
                                    id="evClas" name="evClas" @if ($errors->has('evClas')) border-red-700 @endif>
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($categoriaPersonal as $categoriaPersonal)
                                        <option value="{{ $categoriaPersonal->id }}"
                                            {{ old('evClas') == $categoriaPersonal->id ? 'selected' : '' }}>
                                            {{ $categoriaPersonal->clave }} - {{ $categoriaPersonal->nombre }}</option>
                                    @endforeach
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="bg-red-100 border-l-4 border-red-500 text-orange-700 p-2 invisible"
                                    role="alert" id="error-evClas"></div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="container">
                    <h4 class="font-black">Adscrito</h4>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="adDir">
                                Dirección
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full 
                                            bg-gray-200 border border-gray-200 text-gray-700 
                                            py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                                            focus:bg-white focus:border-gray-500"
                                    id="adDir" name="adDir" @if ($errors->has('adDir')) border-red-700 @endif>
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($areaSec as $areaEv)
                                        <option value="{{ $areaEv->id }}"
                                            {{ old('adDir') == $areaEv->id ? 'selected' : '' }}>{{ $areaEv->nombre }}
                                            - {{ number_format($areaEv->clave) }}</option>
                                    @endforeach
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="bg-red-100 border-l-4 border-red-500 text-orange-700 p-2 invisible"
                                    role="alert" id="error-adDir"></div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="adSub">
                                SubDirección o Departamento
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full 
                                        bg-gray-200 border border-gray-200 text-gray-700 
                                        py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                                        focus:bg-white focus:border-gray-500"
                                    id="adSub" name="adSub" @if ($errors->has('adSub')) border-red-700 @endif>
                                    <option value="">-- Seleccione --</option>
                                    {{-- @foreach ($subAreaSec as $subAreaEv)
                                            <option value="{{$subAreaEv->id}}" {{ old('adSub') == $subAreaEv->id ? 'selected' : '' }}>{{$subAreaEv->nombre}} - {{number_format($subAreaEv->clave, 1)}}</option>
                                        @endforeach --}}
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="bg-red-100 border-l-4 border-red-500 text-orange-700 p-2 invisible"
                                    role="alert" id="error-adSub"></div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="adClas">
                                Clasificado
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full 
                                        bg-gray-200 border border-gray-200 text-gray-700 
                                        py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                                        focus:bg-white focus:border-gray-500"
                                    id="adClas" name="adClas" @if ($errors->has('adClas')) border-red-700 @endif>
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($categoriaPersonalSec as $categoriaPersonalEv)
                                        <option value="{{ $categoriaPersonalEv->id }}"
                                            {{ old('adClas') == $categoriaPersonalEv->id ? 'selected' : '' }}>
                                            {{ $categoriaPersonalEv->clave }} - {{ $categoriaPersonalEv->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="bg-red-100 border-l-4 border-red-500 text-orange-700 p-2 invisible"
                                    role="alert" id="error-adClas"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="adGenero">
                                Género
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full 
                                            bg-gray-200 border border-gray-200 text-gray-700 
                                            py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                                            focus:bg-white focus:border-gray-500"
                                    id="adGenero" name="adGenero"
                                    @if ($errors->has('adGenero')) border-red-700 @endif>
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($genero as $generoEv)
                                        <option value="{{ $generoEv->id }}"
                                            {{ old('adGenero') == $generoEv->id ? 'selected' : '' }}>
                                            {{ $generoEv->nombre }}</option>
                                    @endforeach
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="bg-red-100 border-l-4 border-red-500 text-orange-700 p-2 invisible"
                                    role="alert" id="error-adGenero"></div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="adGruEd">
                                Grupo de edad
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full 
                                            bg-gray-200 border border-gray-200 text-gray-700 
                                            py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                                            focus:bg-white focus:border-gray-500"
                                    id="adGruEd" name="adGruEd" @if ($errors->has('adGruEd')) border-red-700 @endif>
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($grupoEdad as $grupoEdadEv)
                                        <option value="{{ $grupoEdadEv->id }}"
                                            {{ old('adGruEd') == $grupoEdadEv->id ? 'selected' : '' }}>
                                            {{ $grupoEdadEv->nombre }}</option>
                                    @endforeach
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="bg-red-100 border-l-4 border-red-500 text-orange-700 p-2 invisible"
                                    role="alert" id="error-adGruEd"></div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="adAnSer">
                                Años servicio
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full 
                                            bg-gray-200 border border-gray-200 text-gray-700 
                                            py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                                            focus:bg-white focus:border-gray-500"
                                    id="adAnSer" name="adAnSer" @if ($errors->has('adAnSer')) border-red-700 @endif>
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($anosServ as $anosServEv)
                                        <option value="{{ $anosServEv->id }}"
                                            {{ old('adAnSer') == $anosServEv->id ? 'selected' : '' }}>
                                            {{ $anosServEv->nombre }}</option>
                                    @endforeach
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="bg-red-100 border-l-4 border-red-500 text-orange-700 p-2 invisible"
                                    role="alert" id="error-adAnSer"></div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="adDiscapacidad">
                                Tiene alguna Discapacidad
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full 
                                            bg-gray-200 border border-gray-200 text-gray-700 
                                            py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                                            focus:bg-white focus:border-gray-500"
                                    id="adDiscapacidad" name="adDiscapacidad" @if ($errors->has('adDiscapacidad')) border-red-700 @endif>
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($discapacidades as $discapacidadesEv)
                                        <option value="{{ $discapacidadesEv->id }}"
                                            {{ old('adDiscapacidad') == $discapacidadesEv->id ? 'selected' : '' }}>
                                            {{ $discapacidadesEv->nombre }}</option>
                                    @endforeach
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="bg-red-100 border-l-4 border-red-500 text-orange-700 p-2 invisible"
                                    role="alert" id="error-adDiscapacidad"></div>
                            </div>
                        </div>
                        <div id="discapacidad" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" hidden>
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="adDiscapacidad">
                                    Favor de especificar discapacidad:
                                </label>
                                <input type="text" name="inputDiscapacidad" id="inputDiscapacidad" class="block appearance-none w-full 
                                bg-gray-200 border border-gray-200 text-gray-700 
                                py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                                focus:bg-white focus:border-gray-500">
                            <div class="relative">
                                
                            </div>
                            <div class="py-2">
                                <div class="bg-red-100 border-l-4 border-red-500 text-orange-700 p-2 invisible"
                                    role="alert" id="error-adDiscapacidad"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <input type="submit"
                        class="float-right bg-blue-300 shadow-md ml-2 border border-black rounded hover:bg-blue text-sm px-4 py-1 text-gray-700 focus:text-white hover:text-white focus:ring focus:ring-blue focus:bg-blue focus:outline-none focus:ring-opacity-50 flex items-center uppercase"
                        value="Seguir" />
                </div>
            </div>
            <div class="container" id="contPregunta" hidden>
                <p></p>
                <center>
                    {{-- <p class="text-3xl font-black">Clima organizacional</p> --}}
                    
                    <div class="py-10">
                        <p class="py-4 text-xl font-black" id="preguntaQ"></p>
                    </div>

                    <div class="py-10">
                        <ul id="answerQ" class="items-center w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 sm:flex dark:bg-gray-400 dark:border-gray-600 dark:text-white">
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center pl-3">
                                    <input   id="horizontal-list-radio-siempre" type="radio" value="1" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-siempre" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Siempre </label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center pl-3">
                                    <input id="horizontal-list-radio-aVeces" type="radio" value="2" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-aVeces" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">A veces</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center pl-3">
                                    <input id="horizontal-list-radio-nunca" type="radio" value="3" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-nunca" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Nunca</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                </center>
                <div class="py-8">
                    <button id="porqueno"  type="button" class="float-right bg-blue-300 shadow-md ml-2 border border-black rounded hover:bg-blue text-sm px-4 py-1 text-gray-700 focus:text-white hover:text-white focus:ring focus:ring-blue focus:bg-blue focus:outline-none focus:ring-opacity-50 flex items-center uppercase"><i class="far fa-check-circle "></i>&nbsp;Siguiente</button>
                </div>
            </div>
        </div>
        
    </form>
@endsection
