<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Estudiante;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class DatabaseSeeder extends Seeder
{
    //para ejecutar los seeeder sin hacer el migrate:fresh --seed
    //php artisan db:seed 
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
       
        $this->call(AlmacenSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(MarcaSeeder::class);
        $this->call(VehiculoSeeder::class);
        $this->call(PosicionSeeder::class);
        $this->call(ProveedorSeeder::class);

        
        $this->call(PersonalSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(GrupoSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(DocenteSeeder::class);
        $this->call(EstudianteSeeder::class);
         // No necesita llamar a TelefonoSeeder, porque los teléfonos son creados en ClienteSeeder.

    }
}
