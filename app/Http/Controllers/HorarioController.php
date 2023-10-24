<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
class HorarioController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('can:Listar horarios')->only('index');
        //$this->middleware('can:Editar estudiantes')->only('edit', 'update');
        //$this->middleware('can:Crear estudiantes')->only('create', 'store');
        //$this->middleware('can:Eliminar estudiantes')->only('destroy');
    }


    public function index()
    {
        return view('horarios.index');
    }
 


    public function create()
    {
        //ya no se le  manda los demas atributos de prov,alma y parabri
        //porque se trabaja desde el componente livewire
        return view('horarios.create');
    }
    public function edit(Horario $horario)
    {
        //ya no se le  manda los demas atributos de prov,alma y parabri
        //porque se trabaja desde el componente livewire
        return view('nota-compra.edit', ['horario' => $horario]);
    }

}
