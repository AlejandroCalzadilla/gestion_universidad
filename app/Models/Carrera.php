<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;

class Carrera extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'nombre',
         'facultad'
        // otras propiedades aquí
    ];



    public function materias()
    {
        return $this->belongsToMany(Materia::class, 'carrera_materias', 'carrera_id', 'materia_id')
        ->withPivot('id','semestre', 'credito');
    }
}