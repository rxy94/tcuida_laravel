<!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
{{-- Botones para los formularios crear y editar --}}
<div>
    <button class=" bg-blue-600 text-white py-2 px-3 mb-5 rounded hover:bg-blue-800">
        @lang('tcuida.btn_guardar')
    </button>
    <a type="button" 
       href="{{ route('usuario.listar') }}" 
       class=" bg-gray-800 text-white py-2 px-3 mb-5 rounded hover:bg-gray-600">
       @lang('tcuida.btn_volver')
    </a>
</div>