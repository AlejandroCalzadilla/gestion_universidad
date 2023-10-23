<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Docente;
use App\Models\Materia;
use App\Models\Horario;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        
        // otras propiedades aquí
    ];


    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }
 
    public function horario()
    {
        return $this->hasMany(Horario::class);
    }

}
