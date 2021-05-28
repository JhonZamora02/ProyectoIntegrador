<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleServicio extends Model
{
    public $timestamps = false;
    protected $primaryKey='id_dservicio';
    protected $fillable = ['id_dservicio', 'id_servicio', 
    'id_pfactura', 'cantidad', 'descuento'];

    //Relacion con la tabla servicio
    public function servicios(){

    return $this->belongsTo('App\Servicio');
    
    }
}
