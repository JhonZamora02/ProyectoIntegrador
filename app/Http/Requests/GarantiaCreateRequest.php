<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GarantiaCreateRequest extends FormRequest
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
            'fecha_garantia'=>'required',
            'condicion'=>'required',
            'comentarios'=>'required',
            'fecha_limite'=>'required',
        ];
    }

    public function messages(){

        return [
          'id_garantia.required' => 'El código de la garantia debe ser un campo requerido',
          'fecha_garantia.required' => 'La fecha de la garantia debe ser un campo requerido',
          'condicion.required' => 'La condicion de la garantia debe ser un campo requerido',
          'comentarios.required' => 'Los comentarios de la garantia debe ser un campo requerido',
          'fecha_limite.required' => 'La fecha limite de la garantia debe ser un campo requerido',
         ];
     
     }
    

}
