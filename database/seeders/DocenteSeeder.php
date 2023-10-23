<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Docente;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Docente::create([
            'ci' => '1234567',
            'nombre' => 'Juan',
            'materno' => 'Pérez',
            'paterno' => 'Gómez',
            'sexo' => 'Masculino',
            'edad' => '40',
            'descripcionT' => 'Profesor de Matemáticas',
            'email' => 'juan.perez65@example.com',
        ]);
        Docente::create([
            'ci' => '123456711',
            'nombre' => 'Juan',
            'materno' => 'Mamani',
            'paterno' => 'Gómez',
            'sexo' => 'Masculino',
            'edad' => '40',
            'descripcionT' => 'Profesor de calculo',
            'email' => 'juan.perez44@example.com',
        ]);
        Docente::create([
            'ci' => '1234567323',
            'nombre' => 'miguel',
            'materno' => 'rodrigues',
            'paterno' => 'Gómez',
            'sexo' => 'Masculino',
            'edad' => '40',
            'descripcionT' => 'Profesor de redes',
            'email' => 'juan.perez22@example.com',
        ]);
        Docente::create([
            'ci' => '1234563237',
            'nombre' => 'daniel',
            'materno' => 'Pérez',
            'paterno' => 'Gómez',
            'sexo' => 'Masculino',
            'edad' => '40',
            'descripcionT' => 'Profesor de informatica',
            'email' => 'juan.perez@example.com',
        ]);
    }
}
