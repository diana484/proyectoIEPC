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
        'Apellido_paterno' => 'Salgado',
        'Apellido_materno' => 'Alcala',
        'sexo' => 'Femenino',
        'lada' => '961',
        'telefono' => '6123456',
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
