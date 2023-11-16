<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Bitacora;
use App\Models\Carrera;

class MateriaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('can:Listar materias')->only('index');
        $this->middleware('can:Editar materias')->only('edit', 'update');
        $this->middleware('can:Crear materias')->only('create', 'store');
        $this->middleware('can:Eliminar materias')->only('destroy');
    }
   


    public function index()
    {
        return view('materias.index');
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras=Carrera::all();
        return view('materias.create',compact('carreras'));
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         //dd($request) ;  
        $request->validate([          
            'sigla' => 'required',
            'nombre' => 'required',
            'semestre'=> 'required',
            'credito'=> 'required',
            'carrera_id'=> 'required',
            
        ]);
          
        Materia::create([
          
            'sigla' => $request->sigla,
            'nombre' => $request->nombre,
            'semestre'=> $request->semestre,
            'credito'=> $request->credito,
            'carrera_id'=> $request->carrera_id,
           
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
        $pres = Materia::where('id', '<>', $materia->id)->where('carrera_id', '=', $materia->carrera_id) ->get();
        //dd($pres);
        return view('materias.show',compact('materia','pres'));;
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia)
    {
         $carreras=Carrera::all(); 
        return view('materias.edit', compact('materia','carreras'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Materia $materia)
    {

        //dd($request);
        $request->validate([
          
            'sigla' => 'required',
            'nombre' => 'required',
            'semestre'=> 'required',
            'credito'=> 'required',
            'carrera_id'=> 'required',
             
        ]);
 
         $materia->update([
         
            'sigla' => $request->sigla,
            'nombre' => $request->nombre,
            'semestre'=> $request->semestre,
            'credito'=> $request->credito,
            'carrera_id'=> $request->carrera_id,
            
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
