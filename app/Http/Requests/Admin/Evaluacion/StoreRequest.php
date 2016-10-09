<?php

namespace App\Http\Requests\Admin\Evaluacion;

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
            'fecha' => 'required|date_format:d/m/Y',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
            'peso' => 'required|numeric',
            'grupo_id' => 'required|exists:grupo,id',
            'tipo_id' => 'required|exists:tipo_evaluacion,id',
        ];
    }
}
