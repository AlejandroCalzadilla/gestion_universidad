<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;
use App\Models\Horario;
class Carrera extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'nombre',
         'facultad',
         'tipo'
        // otras propiedades aquí
    ];



    public function materia()
    {
        return $this->hasMany(Materia::class);
    }


    public function horario()
    {
        return $this->hasMany(Horario::class);
    }
}
