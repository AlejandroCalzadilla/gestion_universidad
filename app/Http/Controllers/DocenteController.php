<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\Bitacora;
use App\Models\User;
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
      
        $users = User::whereDoesntHave('docente')->get();

        // Pasamos la lista de usuarios a la vista.
        return view('docentes.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         
        $validatedData=$request->validate([
            'ci'=> 'required',
            'nombre' => 'required',
            'materno' => 'required',
            'paterno' => 'required',
            'edad' => 'required',
            'sexo' => 'required',
            'descripcionT' => 'required', 
            'email'=>'required',
            'user_id' => 'nullable|exists:users,id',
   
        ]);

       $docente = new Docente($validatedData);
        $docente->save();

        

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
        $users = User::doesntHave('docente')->orWhere('id', $docente->user_id)->get();
        return view('docentes.edit', compact('docente','users'));
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
            
            'email'=>'required',
            'user_id' => 'nullable|exists:users,id|unique:personals,user_id,' . $docente->id  
   
        ]);



        if ($request->user_id != $docente->user_id) {

            // Si el Personal actual tiene un User asociado, desasociar
            if ($docente->user) {
                $docente->user()->dissociate();
                $docente->save();
            }

            // Si se proporcionó un user_id en el request, encontrar ese User y asociarlo con este Personal
            if ($request->user_id) {
                $user = User::find($request->user_id);
                $docente->user()->associate($user);
                $docente->save();
            }
        }


       /*
         $docente->update([
            'ci'=> $request->ci,
            'nombre' => $request->nombre,
            'materno' => $request->materno,
            'paterno' => $request->paterno,
            'edad' => $request->edad,
            'sexo' => $request->sexo,
            'descripcionT' => $request->descripcionT,
            
            'email'=>$request->email,
        ]);*/

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
