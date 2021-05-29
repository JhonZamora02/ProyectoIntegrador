<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleServicio extends Model
{
    public $timestamps = false;
    protected $primaryKey='id_dservicio';
    protected $fillable = ['id_dservicio', 'servicio_id_servicio ', 
    'pedido_factura_id_pedido_fact', 'cantidad', 'descuento'];

    //Relacion con la tabla servicio

    public function servicios(){
       return $this->hasMany('App\Servicio');
    }
}
