<?php

namespace App\Http\Requests\Admin\Ambiente;

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
            'nombre' => 'required|min:3',
            'tipo_id' => 'required|exists:tipo_ambiente,id',
            'facultad_x_sede_id' => 'required|exists:facultad_x_sede,id',
        ];
    }
}
