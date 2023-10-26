<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\Bitacora;
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
        return view('horarios.edit', ['horario' => $horario]);
    }

    
    public function destroy(Horario $horario)
    {
        $horario->delete();

        $bitacora = new Bitacora();
        $bitacora->accion = 'XXX ELIMINAR HORARIO';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();

        return redirect()->route('horarios.index')->with('info', 'El horario se eliminó con éxito!');
    }
}
