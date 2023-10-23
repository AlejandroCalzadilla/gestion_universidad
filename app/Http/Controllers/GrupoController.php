<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bitacora;
use App\Models\Grupo;
use App\Models\Materia;
use Illuminate\Validation\Rule;
class GrupoController extends Controller
{
    public function index()
    {

        
        return view('grupos.index');
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grupos.create');
    }
 


    public function edit(Grupo $grupo)
    {
        return view('grupos.edit', compact('grupo'));
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',            
        ]);    
        Grupo::create($data);
 

        $bitacora = new Bitacora();
        $bitacora->accion = '+++CREAR Grupo';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();
        // Código adicional o redireccionamiento después de guardar el cliente
 
        return redirect()->route('grupos.index')->with('info', 'Grupo creada exitosamente.');
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
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Grupo $grupo)
    {
        $request->validate([
          
            'sigla' => 'required',
            'nombre' => 'required',
             
        ]);
 
         $grupo->update([
         
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
 
        return redirect()->route('materias.index')->with('info', 'el grupo se eliminó con éxito!');
    }
}
