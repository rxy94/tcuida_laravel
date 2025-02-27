<!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
<div class="flex space-x-2 justify-center">
    <a href="{{ route('usuario.editar', $usuario) }}" 
       class="bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600">
        <i class="fa-solid fa-pen" title="Actualizar"></i>
    </a>
    {{-- Borrar --}}
    <form action="{{ route('usuario.borrar', $usuario) }}}" method="post">
        @csrf
        <button 
            class="bg-red-500 text-white py-1 px-3 rounded   hover:bg-red-600"
            onclick="return confirm('¿Estás segur@ que quieres borrar este usuario?');">
             <i class="fa-solid fa-trash" title="Borrar"></i>
         </button>
    </form>
</div>