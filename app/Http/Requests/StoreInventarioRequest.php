<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Referencia' => 'required|string|max:100|unique:inventarios,Referencia',
            'Categoría'=> 'required|string|max:100',
            'Color'=> 'nullable|string|max:100',
            'Cantidad'=> 'required|integer|min:0',
            'Estado'=> 'required|string|max:100',
        ];
    }

    public function messages() 
{
         return [
            'Referencia.required' => 'La referencia es obligatoria.',
            'Referencia.string' => 'La referencia debe ser una cadena de texto.',
            'Referencia.max' => 'La referencia no debe exceder los 100 caracteres.',
            'Referencia.unique' => 'La referencia ya existe en el inventario.',
            'Categoría.required' => 'La categoría es obligatoria.',
            'Categoría.string' => 'La categoría debe ser una cadena de texto.',
            'Categoría.max' => 'La categoría no debe exceder los 100 caracteres.',
            'Color.string' => 'El color debe ser una cadena de texto.',
            'Color.max' => 'El color no debe exceder los 100 caracteres.',
            'Cantidad.required' => 'La cantidad es obligatoria.',
            'Cantidad.integer' => 'La cantidad debe ser un número entero.',
            'Cantidad.min' => 'La cantidad no puede ser negativa.',
            'Estado.required' => 'El estado es obligatorio.',
            'Estado.string' => 'El estado debe ser una cadena de texto.',
            'Estado.max' => 'El estado no debe exceder los 100 caracteres.',
    ];
}

}