<?php

use Illuminate\Database\Seeder;
use \App\Personas;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personas::create([
        	'profesion_id' => 1,
        	'nombre' => 'RUDY',
        	'primer_apellido' => 'ESCOBAR',
        	'segundo_apellido' => 'PACHECO',
        	'fecha_nacimiento' => '2020-05-18',
        	'edad' => 15,
        	'estado' => 'ACTIVO'
        ]);
    }
}
