<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estudiante;
class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Estudiante::create([
            'codigo' => '001',
            'ci' => '1234567',
            'nombre' => 'María Pérez',
            'sexo' => 'Femenino',
            'telefono' => '555-123-4567',
            'fecha_nacimiento' => '2000-05-15',
            'pais' => 'Ecuador',
            'modalidad_ingreso' => 'Presencial',
            'periodo' => '2023',
            'titulo_bachiller' => 'Bachiller en Ciencias',
            'email' => 'maria.perez@example.com',
        ]);
        Estudiante::create([
            'codigo' => '002',
            'ci' => '9876543',
            'nombre' => 'Juan Rodríguez',
            'sexo' => 'Masculino',
            'telefono' => '555-987-6543',
            'fecha_nacimiento' => '1999-08-25',
            'pais' => 'Perú',
            'modalidad_ingreso' => 'Virtual',
            'periodo' => '2023',
            'titulo_bachiller' => 'Bachiller en Humanidades',
            'email' => 'juan.rodriguez@example.com',
        ]);

        Estudiante::create([
            'codigo' => '003',
            'ci' => '2345678',
            'nombre' => 'Pedro López',
            'sexo' => 'Masculino',
            'telefono' => '555-234-5678',
            'fecha_nacimiento' => '2001-03-10',
            'pais' => 'Colombia',
            'modalidad_ingreso' => 'Presencial',
            'periodo' => '2023',
            'titulo_bachiller' => 'Bachiller en Artes',
            'email' => 'pedro.lopez@example.com',
        ]);

        Estudiante::create([
            'codigo' => '004',
            'ci' => '3456789',
            'nombre' => 'Ana Gómez',
            'sexo' => 'Femenino',
            'telefono' => '555-345-6789',
            'fecha_nacimiento' => '2002-11-05',
            'pais' => 'Argentina',
            'modalidad_ingreso' => 'Virtual',
            'periodo' => '2023',
            'titulo_bachiller' => 'Bachiller en Ciencias Sociales',
            'email' => 'ana.gomez@example.com',
        ]);

        Estudiante::create([
            'codigo' => '005',
            'ci' => '4567890',
            'nombre' => 'Carlos Martínez',
            'sexo' => 'Masculino',
            'telefono' => '555-456-7890',
            'fecha_nacimiento' => '2000-12-20',
            'pais' => 'México',
            'modalidad_ingreso' => 'Presencial',
            'periodo' => '2023',
            'titulo_bachiller' => 'Bachiller en Informática',
            'email' => 'carlos.martinez@example.com',
        ]);


    }
}
