<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'codigo', 
        'ci' ,
        'nombre' ,
        'sexo',
        'telefono' ,
        'fecha_nacimiento' ,
        'modalidad_ingreso',
        'periodo',
        'titulo_bachiller',
        'pais',
        'email',
        // otras propiedades aquí
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
