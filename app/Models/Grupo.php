<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Docente;
use App\Models\Materia;

class Grupo extends Model
{
    use HasFactory;




    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }
 
    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
   

}
