<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materia;
class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  
    public function run()
    {
        Materia::create([
            'sigla' => 'SCI402',
            'nombre' => 'Calculo1',
            'semestre' => 1,
            'credito'=> 5,
            'carrera_id' => 24,
        ]);

        Materia::create([
            'sigla' => 'SCI403',
            'nombre' => 'calculo2',
            'semestre' => 2,
            'credito'=> 5,
            'carrera_id' => 24,
        ]);
        Materia::create([
            'sigla' => 'SCI405',
            'nombre' => 'introduccion a la informatica',
            'semestre' => 1,
            'credito'=> 5,
            'carrera_id' => 24,
        ]);
        Materia::create([
            'sigla' => 'SCI406',
            'nombre' => 'programacion1',
            'semestre' => 2,
            'credito'=> 5,
            'carrera_id' => 24,
        ]);
    }
   
}
