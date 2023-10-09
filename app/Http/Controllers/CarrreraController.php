<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Models\Bitacora;

class CarrreraController extends Controller
{
    //

   //
   public function index()
   {
       return view('carreras.index');
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
       return view('carreras.create');
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
       $request->validate([          
           'nombre' => 'required',
           'facultad' => 'required',
       ]);

       Carrera::create([
         
           'nombre' => $request->nombre,
           'facultad' => $request->facultad,
          
       ]);

       $bitacora = new Bitacora();
       $bitacora->accion = '+++CREAR CARRERA';
       $bitacora->fecha_hora = now();
       $bitacora->fecha = now()->format('Y-m-d');
       $bitacora->user_id = auth()->id();
       $bitacora->save();
       // Código adicional o redireccionamiento después de guardar el cliente

       return redirect()->route('carreras.index')->with('info', 'Carrera creada exitosamente.');
   }

   /**
    * Display the specified resource.
    */
   public function show(Carrera $carrera)

   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(Carrera $carrera)
   {
    
    return view('carreras.edit', compact('carrera'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, Carrera $carrera)
   {
       $request->validate([
         
           'nombre' => 'required',
           'facultad' => 'required',
            
       ]);

        $carrera->update([
        
           'nombre' => $request->nombre,
           'facultad' => $request->facultad,
           
       ]);

       $bitacora = new Bitacora();
       $bitacora->accion = '***ACTUALIZAR CARRERA';
       $bitacora->fecha_hora = now();
       $bitacora->fecha = now()->format('Y-m-d');
       $bitacora->user_id = auth()->id();
       $bitacora->save();

       // Código adicional o redireccionamiento después de actualizar el cliente

       return redirect()->route('carreras.index')->with('info', 'Carrera actualizada exitosamente.');
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Carrera $carrera)
   {
       $carrera->delete();

       $bitacora = new Bitacora();
       $bitacora->accion = 'XXX ELIMINAR CARRERA';
       $bitacora->fecha_hora = now();
       $bitacora->fecha = now()->format('Y-m-d');
       $bitacora->user_id = auth()->id();
       $bitacora->save();

       return redirect()->route('carreras.index')->with('info', 'La Carrera se eliminó con éxito!');
   }


}
