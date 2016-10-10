<?php

namespace App\Http\Requests\Api\Facultad;

use App\Http\Requests\Api\ApiRequest;

class UpdateFacultadApi extends ApiRequest
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
            'codigo' => 'required|max:10',
        ];
    }
}
