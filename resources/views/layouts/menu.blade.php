<!-- Menú lateral -->
<aside class="bg-gray-800 text-white w-64 min-h-screen p-4">
    <nav>
        <ul class="space-y-2">
            <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                <div class="flex items-center ml-3">
                    <i class="fas fa-user-alt mr-2"></i>
                    <a href="{{ route('usuario.listar') }}">
                        @lang('tcuida.lnk_usuarios')
                    </a>
                </div>
            </div>
            <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                <div class="flex items-center ml-3">
                    <i class="fa-solid fa-user-doctor mr-2"></i>
                    <span>@lang('tcuida.lnk_medicos')</span>
                </div>
            </div>
            <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                <div class="flex items-center ml-3">
                    <i class="fa-solid fa-hospital-user mr-2"></i>
                    <span>@lang('tcuida.lnk_pacientes')</span>
                </div>
            </div>
        </ul>
    </nav>
</aside>
