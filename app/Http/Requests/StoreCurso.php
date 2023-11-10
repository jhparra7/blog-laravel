<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Cambiamos a true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required | min:3',
            'slug' => 'required | unique:cursos',
            'description' => 'required',
            'categoria' => 'required'
        ];
    }

    public function messages(): array {
        return [
            'name.required' => 'El nombre es obligatorio',
            'name.min' => 'La longitud debe ser mayor a 3',
            'description.required' => 'La descripcion es obligatoria',
            'categoria.required' => 'La categoria es obligatoria',
        ];
    }

    public function attributes(): array {
        return [
            'name' => 'nombre del curso',
            'description' => 'descripcion',
            'categoria' => 'categoria',
        ];
    }
}
