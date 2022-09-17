<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        
        <title>Clorg - @yield('titulo')</title>
        
        <!-- Fonts -->
        <!-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
        
        <!-- Styles -->
        <!-- <link href="/public/app.css" rel="stylesheet"> -->
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
                }
            }); 
        </script>
        @vite('resources/js/app.js')

    </head>
    <body class="bg-gray-200">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/" class="text-3xl font-black">
                    Clima Organizacional
                </a>
                <nav class="flex gap-2 items-center">
                    {{-- <a class="font-bold uppercase text-gray-500 text-sm" href="/"> Inicio </a> --}}
                </nav>
            </div>
        </header>

        <main class="container mx-auto">
            <!-- <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2> -->
            @yield('contenido')   
        </main>
        <footer>
            <div class="mt-10 text-center p-5 bg-white shadow text-gray-500 font-bold uppercase">
                Clima Organizacional - {{ now()->year }} V0.2
            </div>
        </footer>
    </body>
</html>
