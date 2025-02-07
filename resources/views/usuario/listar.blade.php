@extends("layouts.main")
@section("contenido")
    @parent

    <div class="w-full p-4 mt-5">
        <a href="{{ route("usuario.crear")}}" class="bg-blue-500 text-white py-2 px-3 mb-5 rounded hover:bg-blue-600">
            Crear nuevo usuario
        </a>
        <table class="min-w-full table-auto border-collapse border border-gray-300 mt-5">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="px-4 py-2 border-b">Nombre</th>
                    <th class="px-4 py-2 border-b">Email</th>
                    <th class="px-4 py-2 border-b">Administrador</th>
                    <th class="px-4 py-2 border-b text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-4 py-2">{{ $usuario->nomUsu }} {{ $usuario->apeUsu }}</td>
                        <td class="px-4 py-2">{{ $usuario->emailUsu }}</td>
                        <td class="px-4 py-2">
                            @if ($usuario->admin)
                                <span class="text-green-500">Sí</span>
                            @else
                                <span class="text-red-500">No</span>
                            @endif
                        </td>
                        <td class="px-4 py-2">
                            <div class="flex space-x-2 justify-center">
                                <a href="" class="bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600">
                                    Actualizar
                                </a>
                                <a href="{{ route("usuario.borrar", [ "usuario" => $usuario ]) }}" class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600">
                                    Borrar
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>    

@endsection