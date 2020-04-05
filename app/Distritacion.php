<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distritacion extends Model
{
    //
    protected $table = 'distritacions';
    protected $fillable = ['clave_distrito','cabecera_distrital','clave_municipio','municipio'];
}
