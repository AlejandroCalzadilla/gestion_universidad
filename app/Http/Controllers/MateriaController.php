<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Bitacora;
class MateriaController extends Controller
{
    //
    public function index()
    {
        return view('materias.index');
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materias.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([          
            'sigla' => 'required',
            'nombre' => 'required',
        ]);
 
        Materia::create([
          
            'sigla' => $request->sigla,
            'nombre' => $request->nombre,
           
        ]);
 
        $bitacora = new Bitacora();
        $bitacora->accion = '+++CREAR MATERIA';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();
        // Código adicional o redireccionamiento después de guardar el cliente
 
        return redirect()->route('materias.index')->with('info', 'Materia creada exitosamente.');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
 
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia)
    {
        return view('materias.edit', compact('materia'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Materia $materia)
    {
        $request->validate([
          
            'sigla' => 'required',
            'nombre' => 'required',
             
        ]);
 
         $materia->update([
         
            'sigla' => $request->sigla,
            'nombre' => $request->nombre,
            
        ]);
 
        $bitacora = new Bitacora();
        $bitacora->accion = '***ACTUALIZAR MATERIA';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();
 
        // Código adicional o redireccionamiento después de actualizar el cliente
 
        return redirect()->route('materias.index')->with('info', 'Carrera actualizada exitosamente.');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
 
        $bitacora = new Bitacora();
        $bitacora->accion = 'XXX ELIMINAR MATERIA';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();
 
        return redirect()->route('materias.index')->with('info', 'La Materia se eliminó con éxito!');
    }
}
