<?php

use Illuminate\Database\Seeder;
use \App\Profesion;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('profesion')->insert([
        	'nombre_profesion' => 'ABOGADO',
        	'estado' => 'ACTIVO'
        ]);
        DB::table('profesion')->insert([
        	'nombre_profesion' => 'PSICOLOGO',
        	'estado' => 'ACTIVO'
        ]);*/

        profesion::create([
        	'nombre_profesion' => 'ABOGADO',
        	'estado' => 'ACTIVO'
        ]);
        profesion::create([
        	'nombre_profesion' => 'PSICOLOGO',
        	'estado' => 'ACTIVO'
        ]);
        profesion::create([
        	'nombre_profesion' => 'BOMBERO',
        	'estado' => 'ACTIVO'
        ]);
        profesion::create([
        	'nombre_profesion' => 'ELECTRICISTA',
        	'estado' => 'ACTIVO'
        ]);
    }
}
