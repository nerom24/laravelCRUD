<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarClientesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'nombre' => 'required|string|min:4|max:60',
            'apellidos' => 'required|string',
            'telefono' => 'required|string|min:9|max:15',
            'ciudad' => 'required|string',
            'dni' => 'required',
            'email' => 'required|max:200|email'

        ];
    }
}
