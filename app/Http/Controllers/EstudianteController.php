<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Bitacora;
use App\Models\Carrera;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;


class EstudianteController extends Controller
{
   

    public function __construct()
    {
        $this->middleware('can:Listar estudiantes')->only('index');
        $this->middleware('can:Ver estudiantes')->only('show');
        $this->middleware('can:Editar estudiantes')->only('edit', 'update');
        $this->middleware('can:Crear  estudiantes')->only('create', 'store'); 
        $this->middleware('can:Eliminar estudiantes')->only('destroy');
        $this->middleware('can:ver perfile')->only('perfil');
    }



    public function index()
    {
        return view('estudiante.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 

        $users = User::whereDoesntHave('estudiante')->get(); 
        return view('estudiante.create',['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([
            
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
            'user_id' => 'nullable|exists:users,id',
        ]);
  
        $estudiante = new Estudiante($validatedData);
        $estudiante->save();

    

        $bitacora = new Bitacora();
        $bitacora->accion = '+++CREAR ESTUDIANTE';
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
   // public $estudiante;
    public function show(Estudiante $estudiante )
    {
       // $user = Auth::user();
       // $estudiante = $user->estudiante ?? null;
         //$estudiante =Estudiante::all();
         //dd($estudiante);

        


        return view('estudiante.show', compact('estudiante'));
    }
     
    

    public function perfil()

    {
        //usuario logueado
        $user = Auth::user();
        //este usario esta relacionado con un estudiante  si no devolver null
        $estudiante = $user->estudiante ?? null;
        
        
        return view('estudiante.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiante $estudiante)
    {

        $users = User::doesntHave('estudiante')->orWhere('id', $estudiante->user_id)->get(); 
        return view('estudiante.edit', compact('estudiante','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Estudiante $estudiante)
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

         $estudiante->update([
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
            'user_id' => 'nullable|exists:users,id|unique:estudiante,user_id,' . $estudiante->id  
        ]);
     

        if ($request->user_id != $estudiante->user_id) {

            // Si el Personal actual tiene un User asociado, desasociar
            if ($estudiante->user) {
                $estudiante->user()->dissociate();
                $estudiante->save();
            }

            // Si se proporcionó un user_id en el request, encontrar ese User y asociarlo con este Personal
            if ($request->user_id) {
                $user = User::find($request->user_id);
                $estudiante->user()->associate($user);
                $estudiante->save();
            }
        }
      

        $estudiante->update($request->except('user_id'));




        $bitacora = new Bitacora();
        $bitacora->accion = '***ACTUALIZAR Estudiante';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();

        // Código adicional o redireccionamiento después de actualizar el cliente

        return redirect()->route('estudiante.index')->with('info', 'Estudiante  actualizado exitosamente.');
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

        return redirect()->route('estudiante.index')->with('info', 'El estudiante se eliminó con éxito!');
    }
   


}
