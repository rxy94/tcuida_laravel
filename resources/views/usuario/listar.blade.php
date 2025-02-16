@extends('layouts.main')
@section('contenido')
    @parent

    <div class="w-full p-4 mt-5">
        @if(Auth::user()->admin)
            <a href="{{ route('usuario.crear')}}" 
                class="bg-blue-600 text-white py-2 px-3 mb-5 rounded hover:bg-blue-800">
                @lang('tcuida.btn_crearUsuario')
            </a>            
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
                                <div class="flex space-x-2 justify-center">
                                    <a href="{{ route('usuario.editar', [ 'usuario' => $usuario ]) }}" 
                                       class="bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600">
                                        <i class="fa-solid fa-pen" title="Actualizar"></i>
                                    </a>
                                    <a href="{{ route('usuario.borrar', [ 'usuario' => $usuario ]) }}"      
                                       class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600"
                                       onclick="return confirm('¿Estás segur@ que quieres borrar este usuario?');">
                                        <i class="fa-solid fa-trash" title="Borrar"></i>
                                    </a>
                                </div>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>    

@endsection