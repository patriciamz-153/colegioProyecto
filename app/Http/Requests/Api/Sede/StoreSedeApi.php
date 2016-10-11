<?php

namespace App\Http\Requests\Api\Sede;

use App\Http\Requests\Api\ApiRequest;

class StoreSedeApi extends ApiRequest
{
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
