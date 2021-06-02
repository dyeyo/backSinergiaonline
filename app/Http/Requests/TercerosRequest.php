<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TercerosRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tipo_identificacion' => 'required',
            'numero_identificacion' => 'required',
            'nombre' => 'required',
            'apellido1' => 'required',
            'departamento_id' => 'required',
            'municipio_id' => 'required',
            'tipo_contribuyente_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tipo_identificacion.required' => 'El :attribute es obligatorio.',
            'numero_identificacion.required' => 'El :attribute es obligatorio.',
            'nombre.required' => 'El :attribute es obligatorio.',
            'apellido1.required' => 'El :attribute es obligatorio.',
            'departamento_id.required' => 'El :attribute es obligatorio.',
            'municipio_id.required' => 'El :attribute es obligatorio.',
            'tipo_contribuyente_id.required' => 'El :attribute es obligatorio.'
        ];
    }

    public function attributes()
    {
        return [
            'tipo_identificacion' => 'tipo de identificacion',
            'numero_identificacion' => 'numero de identificacion',
            'nombre' => 'primer nombre',
            'apellido1' => 'primer apellido',
            'departamento_id' => 'departamento',
            'municipio_id' => 'municipio',
            'tipo_contribuyente_id' => 'tipo contribuyente',
        ];
    }
}
