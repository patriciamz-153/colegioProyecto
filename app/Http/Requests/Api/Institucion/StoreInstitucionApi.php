<?php

namespace App\Http\Requests\Api\Institucion;

use App\Http\Requests\Api\ApiRequest;

class StoreInstitucionApi extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|min:10|max:90',
            'siglas' => 'required|min:2|max:10',
        ];
    }
}
