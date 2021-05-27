<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public $timestamps = false;
    protected $primaryKey='id_servicio';
    protected $fillable = ['id_servicio', 'id_garantia', 
    'precio', 'comentarios', 'tipo_servicios'];
}