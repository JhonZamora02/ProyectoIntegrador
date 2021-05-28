<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public $timestamps = false;
    protected $primaryKey='id_servicio';
    protected $fillable = ['id_servicio', 'garantia_id_garantia', 
    'precio', 'comentarios', 'tipo_servicios'];

    //Relacion con la tabla detalle servicio
    public function detalle_servicio(){
        return $this->hasMany('App\DetalleServicio');
    }   
}
