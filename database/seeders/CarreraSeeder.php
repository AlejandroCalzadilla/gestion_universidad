<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carrera;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
       
        $facultades = [
            'Ciencias Sociales y Humanísticas' => [
                'Antropología',
                'Arqueología',
                'Ciencias de la Comunicación',
                'Ciencias de la Educación',
                'Ciencias Políticas',
                'Derecho',
                'Economía',
                'Filosofía',
                'Historia',
                'Letras',
                'Psicología',
                'Sociología',
            ],
            'Ciencias Exactas y Naturales' => [
                'Biología',
                'Bioquímica',
                'Física',
                'Geología',
                'Matemáticas',
                'Química',
            ],
            'Ingeniería y Tecnología' => [
                'Arquitectura',
                'Ingeniería Civil',
                'Ingeniería Eléctrica',
                'Ingeniería Electrónica',
                'Ingeniería Industrial',
                'Ingeniería Informática',
                'Ingeniería Mecánica',
                'Ingeniería Petrolera',
                'Ingeniería Química',
            ],
            'Ciencias de la Salud' => [
                'Enfermería',
                'Medicina',
                'Odontología',
                'Farmacia',
                'Nutrición',
            ],
            'Ciencias Económicas y Financieras' => [
                'Contaduría Pública',
                'Economía',
                'Administración de Empresas',
            ],
            'Ciencias Jurídicas y Políticas' => [
                'Derecho',
                'Ciencias Políticas',
            ],
            'Artes y Humanidades' => [
                'Arte',
                'Danza',
                'Música',
                'Teatro',
            ],
            'Educación' => [
                'Educación Primaria',
                'Educación Secundaria',
                'Educación Superior',
            ],
            'Facultad de Ciencias Agrícolas y Pecuarias' => [
                'Agronomía',
                'Veterinaria',
            ],
            'Facultad de Ciencias Forestales' => [
                'Ingeniería Forestal',
            ],
        ];

        foreach ($facultades as $facultad => $carreras) {
            foreach ($carreras as $carrera) {
                // Crea un registro para la carrera
             Carrera::create([
                    'nombre' => $carrera,
                    'facultad' => $facultad,
                ]);
            }
        }





    }
}
