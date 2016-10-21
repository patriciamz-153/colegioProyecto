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
            'nombre' => 'required|alpha_spaces|max:90',
            'codigo' => 'required|integer|digits_between:1,10',
            'institucion_id' => 'required|exists:institucion,id',
        ];
    }
}
