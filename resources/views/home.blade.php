@extends('layouts.main')
@section('contenido')
    @parent
    
    <div class="w-screen h-screen overflow-hidden relative before:block before:absolute before:bg-black before:h-full before:w-full before:top-0 before:left-0 before:z-10 before:opacity-30">
        <img src="https://picsum.photos/seed/picsum/1900/850" class="absolute top-0 left-0 min-h-full ob" alt="">
        <div class="relative z-20 max-w-screen-lg mx-auto grid grid-cols-12 h-full items-center">
            <div class="col-span-6 mb-20">
                <h1 class="text-white font-extrabold text-5xl mb-8">T-Cuida<span class="text-gray-700 pl-1">+</span></h1>
                <span class="uppercase text-yellow-200 text-m font-bold mb-2 block">
                    Conectando datos, cuidando vidas
                </span>
                <p class="text-gray-600 text-base">
                        Somos expertos en gestión de información médica, ofreciendo soluciones tecnológicas innovadoras que optimizan la atención al paciente. Nuestra plataforma organiza y facilita el acceso seguro y rápido a los datos, mejorando la toma de decisiones y la calidad del cuidado médico. Con un enfoque en seguridad y precisión, buscamos apoyar tanto a los pacientes como a los profesionales de la salud, respaldando cada vida con la mejor tecnología.
                </p>
            </div>
        </div>
    </div>

@endsection
