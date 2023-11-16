<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prerequisito extends Model
{
    use HasFactory;
   protected $fillable = ['materia_id', 'prerequisito_id', /* otros campos */];
}
