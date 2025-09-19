<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use App\Models\Inventario;
use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInventarioRequest;
use App\Http\Requests\UpdateInventarioRequest;


class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventario = Inventario::with('Usuario', 'Producto')
        ->orderBy('id_inventario')
        ->get();
        return view('inventario.index', compact('inventario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventario.create', [
        'productos' => Producto::orderBy('Referencia_producto')->get(['ID_PRODUCTO', 'Referencia_producto']),
        'usuarios' => Usuario::orderBy('Nombres')->get(['ID_USUARIO', 'Nombres']),
        'inventarios' => Inventario::orderBy('Referencia_producto')->get(['ID_INVENTARIO', 'Referencia_producto']),
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventarioRequest $request)
    {
        Inventario::create($request->validated());


        return redirect()
        ->route('inventario.index')
        ->with('Ok', 'Producto agregado al inventario exitosamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Inventario $inventario)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventario $inventario)
    {
        return view('inventario.edit', [
            'inventario' => $inventario,
            'productos' => Producto::orderBy('Referencia_producto')->get(['ID_PRODUCTO', 'Referencia_producto']),
            'usuarios' => Usuario::orderBy('Nombres')->get(['ID_USUARIO', 'Nombres']),
            'inventarios' => Inventario::orderBy('Referencia_producto')->get(['ID_INVENTARIO', 'Referencia_producto']),
        ]);

    }
    /**
     * Update the specified resource in storage.
     */
    
    
    public function update(UpdateInventarioRequest $request, Inventario $inventario)
    {
        $inventario->update($request->validated());

        return redirect()
        ->route('inventario.index')
        ->with('Ok', 'Producto actualizado exitosamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventario $inventario)
    {
        try {
            $inventario->delete();
            return back()->with('Ok', 'Producto eliminado del inventario exitosamente.');
        } catch (\Throwable $e) {
            return back()->withErrors('No se pudo eliminar el producto del inventario. Por favor, inténtelo de nuevo más tarde.');
        }
    }
}
