<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Bitacora;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
   

    public function index()
    {
        return view('estudiante.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'codigo' => 'required',
            'ci' => 'required',
            'nombre' => 'required',
            'sexo' => 'required',
            'telefono' => 'required',
            'fecha_nacimiento' => 'required',
            'modalidad_ingreso'=>'required',
            'periodo'=>'required',
            'titulo_bachiller'=>'required',
            'pais'=>'required',
            'email'=>'required',
        ]);

        Estudiante::create([
            'codigo' =>$request->codigo ,
            'ci' => $request->ci,
            'nombre' => $request->nombre,
            'sexo' => $request->sexo,
            'telefono' => $request->telefono,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'modalidad_ingreso'=>$request->modalidad_ingreso,
            'periodo'=>$request->periodo,
            'pais'=>$request->pais,
            'titulo_bachiller'=>$request->titulo_bachiller,
            'email'=>$request->email,

        ]);

        $bitacora = new Bitacora();
        $bitacora->accion = '+++CREAR Estudiante';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();
        // Código adicional o redireccionamiento después de guardar el cliente

        return redirect()->route('estudiante.index')->with('info', 'Estudiante creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)

    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiante $estudiante)
    {
        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Estudiante $estudiante)
    {
        $request->validate([
            'ci'=> 'required',
            'nombre' => 'required',
            'materno' => 'required',
            'paterno' => 'required',
            'edad' => 'required',
            'sexo' => 'required',
            'descripcionT' => 'required',
            'pais'=>'required',
            'email'=>'required',

   
        ]);

         $estudiante->update([
            'ci'=> $request->ci,
            'nombre' => $request->nombre,
            'materno' => $request->materno,
            'paterno' => $request->paterno,
            'edad' => $request->edad,
            'sexo' => $request->sexo,
            'descripcionT' => $request->descripcionT,
            'pais'=>$request->pais,
            'email'=>$request->email,
        ]);

        $bitacora = new Bitacora();
        $bitacora->accion = '***ACTUALIZAR Estudiante';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();

        // Código adicional o redireccionamiento después de actualizar el cliente

        return redirect()->route('estudiantes.index')->with('info', 'Estudiante  actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        $bitacora = new Bitacora();
        $bitacora->accion = 'XXX ELIMINAR Estudiante';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();

        return redirect()->route('estudiantes.index')->with('info', 'El estudiante se eliminó con éxito!');
    }
   


}
