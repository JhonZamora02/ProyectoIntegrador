<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Detalle_ServicioCreateRequest extends FormRequest
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
            
            'servicio_id_servicio'=>'required',
            'pedido_factura_id_pedido_fact'=>'required',
            'cantidad'=>'required',
            'descuento'=>'required',

        ];
    }

    public function messages(){

        return [
          'id_dservicio.required' => 'El código del detalle servicio debe ser un campo requerido',
          'servicio_id_servicio.required' => 'El código del servicio debe ser un campo requerido',
          'pedido_factura_id_pedido_fact.required' => 'El código del pedido factura debe ser un campo requerido',
          'cantidad.required' => 'La cantidad debe ser un campo requerido',
          'descuento.required' => 'El descuento debe ser un campo requerido',
         ];
     
     }

}
