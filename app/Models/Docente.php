<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grupo;
use App\Models\Horario;
class Docente extends Model
{
    use HasFactory;
    //protected $guarded =['ci'];
    protected $fillable = [
        'nombre',
         'ci',
         'sexo',
         'edad',
         'paterno',
         'materno',
         'pais',
         'descripcionT',
         'email',
        '[ci]',
        // otras propiedades aquí
    ];

    //docente puede estar en muchos horarios 
    public function horario()
    {
        return $this->hasMany(Horario::class);
    }
   
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
