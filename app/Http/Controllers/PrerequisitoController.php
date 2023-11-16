<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prerequisito;
use App\Models\Bitacora;
use App\Models\Materia;


class PrerequisitoController extends Controller
{
    //

    public function index()
   {
       return view('prerequisitos.index');
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create(Materia $materia)
   {
       //dd($materia);

      $pres = Materia::where('id', '<>', $materia->id)->where('carrera_id', '=', $materia->carrera_id) ->get();

       return view('prerequisitos.create',compact('materia','pres'));
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {

       //dd($request);
       $request->validate([          
           'materia_id' => 'required',
           'prerequisito_id' => 'required',
       ]);

       Prerequisito::create([
         
           'materia_id' => $request->materia_id,
           'prerequisito_id' => $request->prerequisito_id,
          
       ]);

       $bitacora = new Bitacora();
       $bitacora->accion = '+++CREAR prerequisito';
       $bitacora->fecha_hora = now();
       $bitacora->fecha = now()->format('Y-m-d');
       $bitacora->user_id = auth()->id();
       $bitacora->save();
       // Código adicional o redireccionamiento después de guardar el cliente

       return redirect()->route('materias.index')->with('info', 'prerequisito creado exitosamente.');
   }

   /**
    * Display the specified resource.
    */
   
   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Prerequisito $prerequisito)
   {
      $prerequisito->delete();

       $bitacora = new Bitacora();
       $bitacora->accion = 'XXX ELIMINAR prerequisito';
       $bitacora->fecha_hora = now();
       $bitacora->fecha = now()->format('Y-m-d');
       $bitacora->user_id = auth()->id();
       $bitacora->save();

       return redirect()->route('materias.index')->with('info', 'el prerequisito se eliminó con éxito!');
   }
}
