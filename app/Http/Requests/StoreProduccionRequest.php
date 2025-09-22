<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduccionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'Codigo_producto' => 'required|string|max:50',
            'Categoria_producto' => 'required|string|max:50',
            'Material_producto' => 'required|string|max:50',
            'Tipo_de_producto' => 'required|string|max:50',
            'Color_producto' => 'required|string|max:30',
            'Cantidad_producto' => 'required|integer|min:0',
            'Estado_producto' => 'required|string|in:Terminado,En espera,En Producción',
            'usuarios_id' => 'required|integer|exists:usuarios,ID_USUARIO',
            'producto_id' => 'required|integer|exists:producto,ID_PRODUCTO',
        ];
    }

    public function messages()
    {
        return [
            'Codigo_producto.required' => 'El código del producto es obligatorio.',
            'Categoria_producto.required' => 'La categoría es obligatoria.',
            'Material_producto.required' => 'El material es obligatorio.',
            'Tipo_de_producto.required' => 'El tipo de producto es obligatorio.',
            'Color_producto.required' => 'El color es obligatorio.',
            'Cantidad_producto.required' => 'Debe ingresar la cantidad.',
            'Cantidad_producto.integer' => 'La cantidad debe ser un número entero.',
            'Cantidad_producto.min' => 'La cantidad no puede ser negativa.',
            'Estado_producto.required' => 'Debe indicar el estado del producto.',
            'Estado_producto.in' => 'El estado debe ser: Terminado, En espera o En Producción.',
            'usuarios_id.exists' => 'El usuario asignado no existe.',
            'producto_id.exists' => 'El producto asignado no existe.',
        ];
    }
} 