<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Editar Producto en Inventario</h1>

        <form action="{{ route('inventario.update', $inventario->ID_INVENTARIO) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Formulario Parcial -->
            @include('inventario._form', [
                'inventario'  => $inventario,   
                'productos'   => $productos,
                'usuarios'    => $usuarios,
                'inventarios' => $inventarios, 
            ])

            <div class="pt-4 flex gap-3">
                <button 
                    type="submit" 
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                >
                    Actualizar
                </button>
                <a href="{{ route('inventario.index') }}" class="px-4 py-2 border border-gray-300 rounded hover:bg-gray-50">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
