<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <header class="bg-gray-500 p-4 flex items-center justify-between">
        <div>
            <h1 class="text-white text-3xl font-semibold">
                <a href="{{ route('home') }}">T-Cuida</a><span class="text-yellow-400 pl-1">+</span>
            </h1>
        </div>
        <div class="flex items-center space-x-4">
            <span class="text-white text-xl"> 
                @lang('tcuida.msg_bienvenida', 
                        ['nomUsu' => Auth::user()->nomUsu, 
                         'apeUsu' => Auth::user()->apeUsu])
            </span>
            <i class="fas fa-user-circle text-white text-2xl"></i>
            {{-- logout --}}
            <form action="{{ route('logout') }}" method="post">
                @csrf
                  <button type="submit">
                    <i class="fa-solid fa-power-off text-yellow-400 text-2xl pl-2 pr-2 hover:text-yellow-500"></i>
                  </button>
            </form>
        </div>
    </header>

    <main class="min-h-screen w-full bg-gray-100 text-gray-700" x-data="layout">
        <div class="flex">
            @section('contenido')
                @include('layouts.menu')
            @show

        </div>
    </main>
    
</body>
</html>