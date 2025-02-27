@extends('layouts.main')
@section('contenido')
    @parent

    <div class="w-full p-4 mt-5">

        <h1 class="text-center text-yellow-400 text-3xl font-semibold">
            @lang('tcuida.tit_crearUsuario')
        </h1>
        <div class="flex items-center justify-center p-12">

            <div class="mx-auto w-full max-w-xl">
                
                <form action="{{ route('usuario.crear') }}" method="post">

                    @csrf
                    {{-- Campo Nombre --}}
                    <div class="mb-5">
                        <label for="nombre" class="mb-3 block text-base font-medium text-[#07074D]">
                            @lang('tcuida.lbl_nombre') 
                        </label>
                        <input type="text" name="nombre" id="nombre"
                            placeholder="Nombre"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                    @error('nombre')
                        <ul class="mt-2 flex flex-col bg-yellow-50 rounded-lg p-4 mb-4 text-sm text-red-600" role="alert">
                            <li class="flex items-center">
                                <i class="fa-solid fa-circle-exclamation pt-1 px-2"></i>
                                {{ $message }}
                            </li>
                        </ul>
                    @enderror
                    {{-- Campo Apellidos --}}
                    <div class="mb-5">
                        <label for="apellidos" class="mb-3 block text-base font-medium text-[#07074D]">
                            @lang('tcuida.lbl_apellidos') 
                        </label>
                        <input type="text" name="apellidos" id="apellidos"
                            placeholder="Apellidos"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                    @error('apellidos')
                        <ul class="mt-2 flex flex-col bg-yellow-50 rounded-lg p-4 mb-4 text-sm text-red-600" role="alert">
                            <li class="flex items-center">
                                <i class="fa-solid fa-circle-exclamation pt-1 px-2"></i>
                                {{ $message }}
                            </li>
                        </ul>
                    @enderror
                    {{-- Campo Email --}}
                    <div class="mb-5">
                        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                            @lang('tcuida.lbl_email')
                        </label>
                        <input type="email" name="email" id="email"
                            placeholder="usuario@tcuida.com"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                    @error('email')
                        <ul class="mt-2 flex flex-col bg-yellow-50 rounded-lg p-4 mb-4 text-sm text-red-600" role="alert">
                            <li class="flex items-center">
                                <i class="fa-solid fa-circle-exclamation pt-1 px-2"></i>
                                {{ $message }}
                            </li>
                        </ul>
                    @enderror
                    {{-- Campo Clave --}}
                    <div class="mb-5">
                        <label for="clave" class="mb-3 block text-base font-medium text-[#07074D]">
                            @lang('tcuida.lbl_clave')
                        </label>
                        <input type="text" name="clave" id="clave"
                            placeholder="Introduce tu contraseña"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                    @error('clave')
                        <ul class="mt-2 flex flex-col bg-yellow-50 rounded-lg p-4 mb-4 text-sm text-red-600" role="alert">
                            <li class="flex items-center">
                                <i class="fa-solid fa-circle-exclamation pt-1 px-2"></i>
                                {{ $message }}
                            </li>
                        </ul>
                    @enderror
                    {{-- Campo Admin --}}
                    <div class="mb-5">
                        <label for="admin" class="mb-3 block text-base font-medium text-[#07074D]">
                            @lang('tcuida.lbl_admin')
                        </label>
                        <select name="admin" id="admin" 
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md">
                            <option value="0">@lang('tcuida.val_noAdmin')</option>
                            <option value="1">@lang('tcuida.val_siAdmin')</option>
                        </select>
                    </div>

                    {{-- Componente --}}
                    <x-botonera-form />

                </form>
            </div>
        </div>

    </div>

@endsection