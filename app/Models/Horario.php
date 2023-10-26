<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Docente;
use App\Models\Materia;
use App\Models\Carrera;
use App\Models\Grupo;
class Horario extends Model
{
    use HasFactory;
    protected $fillable = [
         'cupos',
         'horario',
        'materia_id',
         'docente_id',
         'carrera_id',
        
        // otras propiedades aquí
    ];

    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }
    
    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
    
    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }

   
}
