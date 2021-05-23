<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garantia extends Model
{
    public $timestamps = false;
    protected $fillable = ['id_garantia', 'fecha_garantia', 
    'comentarios', 'condicion', 'fecha_limite'];
}
