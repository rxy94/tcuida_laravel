@extends("layouts.main")
@section("contenido")
    @parent

    <div class="w-full p-4 mt-5">

        <h1 class="text-center text-yellow-500 text-3xl font-semibold">Crear un nuevo usuario</h1>
        <div class="flex items-center justify-center p-12">

            <div class="mx-auto w-full max-w-xl">
                
                <form action="{{ route("usuario.crear") }}" method="post">

                    @csrf
                    
                    <div class="mb-5">
                        <label for="nombre" class="mb-3 block text-base font-medium text-[#07074D]">
                            Nombre: 
                        </label>
                        <input type="text" name="nombre" id="nombre"
                            placeholder="Nombre"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                    @if($errors->any())
                        <div class="flex bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-gray-700" role="alert">
                            <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            {{ $errors->first("nombre") }}
                        </div>
                    @endif
                    
                    <div class="mb-5">
                        <label for="apellidos" class="mb-3 block text-base font-medium text-[#07074D]">
                            Apellidos: 
                        </label>
                        <input type="text" name="apellidos" id="apellidos"
                            placeholder="Apellidos"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                    @if($errors->any())
                        <div class="flex bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-gray-700" role="alert">
                            <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            {{ $errors->first("apellidos") }}
                        </div>
                    @endif

                    <div class="mb-5">
                        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                            Email:
                        </label>
                        <input type="email" name="email" id="email"
                            placeholder="usuario@tcuida.com"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                    @if($errors->any())
                        <div class="flex bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-gray-700" role="alert">
                            <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            {{ $errors->first("email") }}
                        </div>
                    @endif

                    <div class="mb-5">
                        <label for="clave" class="mb-3 block text-base font-medium text-[#07074D]">
                            Contraseña:
                        </label>
                        <input type="text" name="clave" id="clave"
                            placeholder="Introduce tu contraseña"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                    @if($errors->any())
                        <div class="flex bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-gray-700" role="alert">
                            <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            {{ $errors->first("clave") }}
                        </div>
                    @endif

                    <div>
                        <button class=" bg-blue-500 text-white py-2 px-3 mb-5 rounded hover:bg-blue-600">
                            Guardar
                        </button>
                        <a type="button" href="{{ route("usuario.listar") }}" class=" bg-gray-800 text-white py-2 px-3 mb-5 rounded hover:bg-gray-600">
                            Volver
                        </a>
                    </div>

                    {{-- @if($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}

                </form>
            </div>
        </div>

    </div>

@endsection