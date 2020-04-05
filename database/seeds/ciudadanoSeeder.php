<?php

use Illuminate\Database\Seeder;

use App\Ciudadanos;

class ciudadanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ciudadano = Ciudadanos::create([
        'nombre' => 'Diana',
        'Apellido_paterno' => 'salgado',
        'Apellido_materno' => 'alcala',
        'sexo' => 'femenino',
        'telefono' => '9612345678',
        'email' => 'dianasalgado@gmail.com',
        'distrito' => '1',
        'Municipio' => 'tuxtla gutierrez',        
        'partido_politico' => ' ',
        'nombre_partido' => ' ',
        'cargo' => ' ',
        'clave' => 'DSA',
        'folio' => '1',
        ]);
        

    }
}
