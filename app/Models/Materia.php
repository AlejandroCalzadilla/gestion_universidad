<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carrera;
use App\Models\Grupo;
use App\Models\Horario;
class Materia extends Model
{
    use HasFactory;
    protected $fillable = [
        'sigla',
        'nombre',
        'semestre',
        'credito',
        'materia_id',
         
        // otras propiedades aquí
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
    

    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }

    public function horario()
    {
        return $this->hasMany(Horario::class);
    }
    
    public function prerequisitos()
    {
        return $this->belongsToMany(Materia::class, 'prerequisitos', 'materia_id', 'prerequisito_id');
    }
   

}
