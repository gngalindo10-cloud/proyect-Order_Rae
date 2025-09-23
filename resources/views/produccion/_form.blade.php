@php
    $val = fn($key, $default = '') => old($key, isset($produccion) ? ($produccion->{$key} ?? $default) : $default);
@endphp

<div class="flex justify-center items-start py-8">
    <div class="w-full max-w-2xl">

        <div class="space-y-6">

            <!-- Referencia -->
            <div class="relative z-0 w-full mb-6 group">
                <input 
                    type="text" 
                    name="Referencia_producto" 
                    id="Referencia_producto" 
                    value="{{ $val('Referencia_producto') }}" 
                    class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                    placeholder=" " 
                    required 
                />
                <label for="Referencia_producto" class="peer-focus:font-medium absolute text-sm text-gray-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Referencia</label>
                @error('Referencia_producto')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Categoría -->
            <div class="relative z-0 w-full mb-6 group">
                <input 
                    type="text" 
                    name="Categoria_producto" 
                    id="Categoria_producto" 
                    value="{{ $val('Categoria_producto') }}" 
                    class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                    placeholder=" " 
                    required 
                />
                <label for="Categoria_producto" class="peer-focus:font-medium absolute text-sm text-gray-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Categoría</label>
                @error('Categoria_producto')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Material -->
            <div class="relative z-0 w-full mb-6 group">
                <input 
                    type="text" 
                    name="Material_producto" 
                    id="Material_producto" 
                    value="{{ $val('Material_producto') }}" 
                    class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                    placeholder=" " 
                    required 
                />
                <label for="Material_producto" class="peer-focus:font-medium absolute text-sm text-gray-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Material</label>
                @error('Material_producto')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Cantidad -->
            <div class="relative z-0 w-full mb-6 group">
                <input 
                    type="number" 
                    name="Cantidad_producto" 
                    id="Cantidad_producto" 
                    value="{{ $val('Cantidad_producto') }}" 
                    min="0" 
                    class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                    placeholder=" " 
                    required 
                />
                <label for="Cantidad_producto" class="peer-focus:font-medium absolute text-sm text-gray-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Cantidad</label>
                @error('Cantidad_producto')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Color -->
            <div class="relative z-0 w-full mb-6 group">
                <input 
                    type="text" 
                    name="Color_producto" 
                    id="Color_producto" 
                    value="{{ $val('Color_producto') }}" 
                    class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                    placeholder=" " 
                    required 
                />
                <label for="Color_producto" class="peer-focus:font-medium absolute text-sm text-gray-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Color</label>
                @error('Color_producto')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Estado -->
            <div class="relative z-0 w-full mb-6 group">
                <select 
                    name="Estado_producto" 
                    id="Estado_producto" 
                    class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                    required
                >
                    <option value="" disabled {{ is_null($val('Estado_producto')) ? 'selected' : '' }}>Seleccione el estado</option>
                    <option value="Terminado" {{ $val('Estado_producto') == 'terminado' ? 'selected' : '' }}>TERMINADO</option>
                    <option value="En espera" {{ $val('Estado_producto') == 'En espera' ? 'selected' : '' }}>EN ESPERA</option>
                    <option value="En Producción" {{ $val('Estado_producto') == 'En Producción' ? 'selected' : '' }}>EN PRODUCCIÓN</option>
                </select>
                <label for="Estado_producto" class="peer-focus:font-medium absolute text-sm text-gray-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Estado</label>
                @error('Estado_producto')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Usuario -->
            <div class="relative z-0 w-full mb-6 group">
                <select 
                    name="usuarios_id" 
                    id="usuarios_id" 
                    class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                    required
                >
                    <option value="" disabled {{ is_null($val('usuarios_id')) ? 'selected' : '' }}>Seleccione el usuario</option>
                    @foreach($usuarios as $user)
                        <option value="{{ $user->ID_USUARIO }}" {{ $val('usuarios_id') == $user->ID_USUARIO ? 'selected' : '' }}>
                            {{ $user->Nombres ?? 'Usuario sin nombre' }}
                        </option>
                    @endforeach
                </select>
                <label for="usuarios_id" class="peer-focus:font-medium absolute text-sm text-gray-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Usuario</label>
                @error('usuarios_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Producto -->
            <div class="relative z-0 w-full mb-6 group">
                <select 
                    name="producto_id" 
                    id="producto_id" 
                    class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                    required
                >
                    <option value="" disabled {{ is_null($val('producto_id')) ? 'selected' : '' }}>Seleccione el producto</option>
                    @foreach($productos as $prod)
                        <option value="{{ $prod->ID_PRODUCTO }}" {{ $val('producto_id') == $prod->ID_PRODUCTO ? 'selected' : '' }}>
                            {{ $prod->Referencia_producto ?? 'Producto sin nombre' }}
                        </option>
                    @endforeach
                </select>
                <label for="producto_id" class="peer-focus:font-medium absolute text-sm text-gray-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Producto</label>
                @error('producto_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p> 
                @enderror
            </div>
        </div>
    </div>
</div>

