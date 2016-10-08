<?php

namespace App\Http\Requests\Api\Institucion;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;

class StoreInstitucionApi extends FormRequest
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
            'nombre' => 'required|min:10|max:90',
            'siglas' => 'required|min:2|max:10',
        ];
    }

    public function response(array $errors)
    {
        return response()->json([
            'errores' => $errors,
            'mensaje' => 'Error en la entrada de datos',
        ], 422);
    }
}
