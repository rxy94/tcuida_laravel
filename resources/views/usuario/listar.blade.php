@extends('layouts.main')
@section('contenido')
    @parent

    <div class="w-full p-4 mt-5">
        @if(Auth::user()->admin)
            {{-- Componente --}}
            <x-boton-registrar />           
        @endif
        
        {{-- Tabla de Usuarios --}}
        <table class="min-w-full table-auto border-collapse border border-gray-300 mt-5">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="px-4 py-2 border-b">@lang('tcuida.thd_nombre')</th>
                    <th class="px-4 py-2 border-b">@lang('tcuida.thd_apellidos')</th>
                    <th class="px-4 py-2 border-b">@lang('tcuida.thd_email')</th>
                    <th class="pr-3 py-2 border-b">@lang('tcuida.thd_admin')</th>
                    @if(Auth::user()->admin)
                        <th class="px-4 py-2 border-b text-center">@lang('tcuida.thd_acciones')</th>   
                    @endif
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-4 py-2">{{ $usuario->nomUsu }}</td>
                        <td class="px-4 py-2">{{ $usuario->apeUsu }}</td>
                        <td class="px-4 py-2">{{ $usuario->email }}</td>
                        <td class="pl-10 py-2">
                            @if ($usuario->admin)
                                <span class="text-green-500">@lang('tcuida.val_siAdmin')</span>
                            @else
                                <span class="text-red-500">@lang('tcuida.val_noAdmin')</span>
                            @endif
                        </td>
                        {{-- Botones --}}
                        @if(Auth::user()->admin)
                            <td class="px-4 py-2">
                                {{-- componente --}}
                                <x-botonera-listar :usuario='$usuario' />
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>    

@endsection