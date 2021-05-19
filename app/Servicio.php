<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public $timestamps = false;
    protected $fillable = ['cod_servicio', 'cod_garantia', 
    'cod_cita', 'tpo_servicio'];
}
