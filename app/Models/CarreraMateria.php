<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarreraMateria extends Model
{
    use HasFactory;
    protected $fillable = [
        'semestre', 
        'credito', 
         'carrera_id', 
         'materia_id' 
         
        // otras propiedades aquí
    ];

    public function prerequisitos()
    {
        return $this->belongsToMany(CarreraMateria::class, 'prerequisitos', 'materia_id', 'prerequisito_id');
    }



}
