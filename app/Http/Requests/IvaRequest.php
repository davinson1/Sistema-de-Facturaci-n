<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IvaRequest extends FormRequest
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
          'valor_iva' => 'required|numeric',
          'fecha_fin' => 'required|date',
        ];
    }
}
