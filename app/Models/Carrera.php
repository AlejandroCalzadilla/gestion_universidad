<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;

class Carrera extends Model
{
    use HasFactory;

    public function materias()
    {
        return $this->belongsToMany(Materia::class, 'carrera_materia')
                    ->withPivot('semestre','credito');
    }
}
