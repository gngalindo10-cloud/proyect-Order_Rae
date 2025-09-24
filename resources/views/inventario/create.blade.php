<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">AGREGAR PRODUCTO</h1>

        <form action="{{ route('inventario.store') }}" method="POST" class="space-y-6">
            @csrf

            {{-- Incluir el formulario parcial --}}
            @include('inventario._form', [
                'inventario' => null,    
                'productos'  => $productos,
                'usuarios'   => $usuarios,
                'inventarios' => $inventarios,
            ])

            <div class="flex justify-center pt-4 flex gap-3">
                <button 
                    type="submit" 
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 
                    focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 
                    py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 
                    dark:focus:ring-green-800">
                    Guardar
                </button>
                <a href="{{ route('inventario.index') }}" 
                    class="px-4 py-2 border border-gray-300 rounded hover:bg-gray-50">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</x-app-layout>