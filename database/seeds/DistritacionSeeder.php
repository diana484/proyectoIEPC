<?php

use Illuminate\Database\Seeder;

use App\Distritacion;

class DistritacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $distritacion = Distritacion::create([
            'clave_distrito' => '1',
            'cabecera_distrtal' =>'Tuxtla Gutierrez',
            'clave_municipio' => '102',
            'municipio' => 'Tuxtla Gutierrez',
        ]);
        
    }
}
