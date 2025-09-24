<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PRODUCCIÓN') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- NOTIFICACIONES  -->
            @if(session('Ok'))
                <div class="mb-6 max-w-lg mx-auto bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-md" role="alert">
                    <p class="font-bold"> ¡OK!</p>
                    <p>{{ session('Ok') }}</p>
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 max-w-lg mx-auto bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-md" role="alert">
                    <p class="font-bold">¡Error!</p>
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Botón crear --}}
            <div class="mb-4 flex justify-end">
                <a href="{{ route('produccion.create') }}"
                    class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Acceder a Orden
                </a>
            </div>

            <div class="bg-white p-4 rounded shadow">
                <table id="produccion" class="display w-full text-sm text-center text-black">
                    <thead class="text-base text-gray-500 uppercase bg-gray-50">
                        <tr>
                            <th>Referencia</th>
                            <th>Categoría</th>
                            <th>Material</th>
                            <th>Cantidad</th>
                            <th>Color</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produccion as $items)
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <td>{{ $items->Referencia_producto }}</td>
                                <td>{{ $items->Categoria_producto }}</td>
                                <td>{{ $items->Material_producto }}</td>
                                <td>{{ $items->Color_producto }}</td>
                                <td>{{ $items->Cantidad_producto }}</td>
                                <td>{{ $items->Estado_producto }}</td>
                                <td class="px-6 py-4 gap-2 flex justify-center">
                                    <a href="{{ route('produccion.edit', $items) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
                                        Editar
                                    </a>
                                    <form action="{{ route('produccion.destroy', $items) }}" method="POST"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md"
                                        style="display:inline" onsubmit="return confirm('¿Deseas eliminar este producto?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- jQuery + DataTables (CDN) --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

    <script>
        $(function () {
            $('#produccion').DataTable({
                pageLength: 20,
                dom: 'Bfrtip',
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'
                },
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
        });
    </script>
</x-app-layout>
