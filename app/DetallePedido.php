<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    public $timestamps = false;
    protected $fillable = ['documentoidentidad', 'primer_nombre', 
    'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'telefono'];
}
