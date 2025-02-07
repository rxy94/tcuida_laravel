<!-- Menú lateral -->
<aside class="bg-gray-800 text-white w-64 min-h-screen p-4">
    <nav>
        <ul class="space-y-2">
            <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                <div class="flex items-center">
                    <i class="fas fa-user-alt mr-2"></i>
                    <a href="{{ route("usuario.listar") }}">Usuarios</a>
                </div>
            </div>
            <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                <div class="flex items-center">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <span>Médicos</span>
                </div>
            </div>
            <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                <div class="flex items-center">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <span>Pacientes</span>
                </div>
            </div>
        </ul>
    </nav>
</aside>
