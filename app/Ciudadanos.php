<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudadanos extends Model
{
    //
    protected $table = 'ciudadanos';
    protected $fillable = ['nombre','Apellido_paterno','Apellido_materno','sexo','lada','telefono','email','distrito','Municipio',
                            'partido_politico','nombre_partido','cargo','clave','folio'];
}
