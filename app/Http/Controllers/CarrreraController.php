<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Models\Bitacora;
use App\Models\Materia;
use Illuminate\Support\Facades\DB;
use PDF;
class CarrreraController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('can:Listar carreras')->only('index');
        $this->middleware('can:Editar carreras')->only('edit', 'update');
        $this->middleware('can:Crear carreras')->only('create', 'store');
        $this->middleware('can:Eliminar carreras')->only('destroy');
    }


  




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
       //dd($request->tipo,$request->nombre);

       $validatedData= $request->validate([          
           'nombre' => 'required',
           'facultad' => 'required',
           'tipo'    => 'required',
       ]);
       //dd($request->tipo);
       $carrera = new Carrera($validatedData);
        $carrera->save(); 
       
       /*
       Carrera::create([  
           'nombre' => $request->nombre,
           'facultad' => $request->facultad,  
           'tipo' => $request->tipo,
          
       ]);*/

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
        $id=$carrera->id;
       $materias = Materia::where('carrera_id', '=',$id)->get();
       //dd();
       return view('carreras.show', compact('carrera','materias'));
   }


   public function generarPDF($carrera)
   {
       $carreras = Carrera::find($carrera);
       $materias=$carreras->materia;
       $materias = $materias->sortBy('semestre');
       
        
       //interpretacion del loadview
       /*Con referencia a view, la vista pdf que esta dentro de la carpeta almacen*/
       $pdf = PDF::loadView('carreras.pdf', compact('carreras','materias'));

         $filename = 'carrera_' . $carreras->nombre . '_' . $carreras->id . '.pdf';
       //$filename = 'venta_' . $nota_venta->id . '.pdf';
       return $pdf->download($filename);
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
           'tipo' => 'required',
            
       ]);

        $carrera->update([
        
           'nombre' => $request->nombre,
           'facultad' => $request->facultad,
           'tipo' => $request->tipo,
           
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
