<?php

namespace App\Http\Requests\Admin\Sede;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'nombre' => 'required|max:90',
            'direccion' => 'required|max:255',
            'distrito_id' => 'required|exists:distrito,id',
            'institucion_id' => 'required|exists:institucion,id',
        ];
    }
}
