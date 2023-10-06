<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\Bitacora;
use Illuminate\Support\Facades\DB;

class DocenteController extends Controller
{
    //
    public function index()
    {
        return view('docentes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

        Docente::create([
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
        $bitacora->accion = '+++CREAR Docente';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();
        // Código adicional o redireccionamiento después de guardar el cliente

        return redirect()->route('docentes.index')->with('info', 'Docente creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Docente $docente)

    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docente $docente)
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

         $docente->update([
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
        $bitacora->accion = '***ACTUALIZAR CLIENTE';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();

        // Código adicional o redireccionamiento después de actualizar el cliente

        return redirect()->route('docentes.index')->with('info', 'Docente actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docente $docente)
    {
        $docente->delete();

        $bitacora = new Bitacora();
        $bitacora->accion = 'XXX ELIMINAR CLIENTE';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();

        return redirect()->route('docentes.index')->with('info', 'El docente se eliminó con éxito!');
    }





}
