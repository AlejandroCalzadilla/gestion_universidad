<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Grupo::create(['nombre' => 'sa']);//1
        Grupo::create(['nombre' => 'sb']);//1
        Grupo::create(['nombre' => 'sc']);//1
        Grupo::create(['nombre' => 'sd']);//1
        Grupo::create(['nombre' => 'sw']);//1
        Grupo::create(['nombre' => 'sf']);//1
        Grupo::create(['nombre' => 'sh']);//1
        Grupo::create(['nombre' => 'sk']);//1

    }
}
