<?php

namespace App\Http\Requests\Admin\Facultad;

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
            'codigo' => 'required|max:10',
            'institucion_id' => 'required|exists:institucion,id',
        ];
    }
}
