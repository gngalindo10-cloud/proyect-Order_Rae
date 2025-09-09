<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Nuevo Producto') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <form action="#" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
            @csrf
            
            <!-- Referencia -->
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="referencia" id="referencia" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="referencia" class="peer-focus:font-medium absolute text-sm text-gray-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Referencia</label>
            </div>

            <!-- Categoría -->
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="categoria" id="categoria" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="categoria" class="peer-focus:font-medium absolute text-sm text-gray-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Categoría</label>
            </div>

            <!-- Color -->
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="color" id="color" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="color" class="peer-focus:font-medium absolute text-sm text-gray-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Color</label>
            </div>

            <!-- Cantidad -->
            <div class="relative z-0 w-full mb-5 group">
                <input type="number" name="cantidad" id="cantidad" min="0" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="cantidad" class="peer-focus:font-medium absolute text-sm text-gray-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Cantidad</label>
            </div>

            <!-- Estado -->
            <div class="relative z-0 w-full mb-5 group">
                <select name="estado" id="estado" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
                    <option value="" disabled selected>Seleccione el estado</option>
                    <option value="activo">Disponible</option>
                    <option value="inactivo">Agotado</option>
                    <option value="en_fabricacion">En Fabricación</option>
                </select>
                <label for="estado" class="peer-focus:font-medium absolute text-sm text-gray-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Estado</label>
            </div>

            <button type="submit" class="w-full bg-blue-700 hover:bg-blue-800 text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:outline-none focus:ring-4 focus:ring-blue-300">
                Crear Producto
            </button>
        </form>
    </div>

</x-app-layout>


