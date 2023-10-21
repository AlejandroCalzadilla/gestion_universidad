<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carrera;
use App\Models\Grupo;
class Materia extends Model
{
    use HasFactory;
    protected $fillable = [
        'sigla',
        'nombre',
         
        // otras propiedades aquí
    ];

    public function carreras()
    {
       return $this->belongsToMany(Carrera::class, 'carrera_materias', 'carrera_id', 'materia_id')
                    ->withPivot('id','semestre', 'credito');  
    }

    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }


}
