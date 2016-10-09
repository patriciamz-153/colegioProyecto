<?php

namespace App\Http\Requests\Admin\PlanEstudio;

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
            'nombre'              => 'required|max:90',
            'esta_vigente'        => 'required',
            'anio_de_publicacion' => 'required|integer',
            'escuela_id'          => 'required|exists:eap,id',
        ];
    }
}
