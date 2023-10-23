<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bitacora;
use App\Models\Carrera;
use App\Models\Materia;
use App\Models\Docente;
use App\Models\Grupo;
class CreateGrupo extends Component
{



    public $nombre;
    public $carrera_id;
    public $materia_id;
    public $docente_id;


    /*
    public function updated($propertyName)
    {
        if ($propertyName == 'cantidad' || $propertyName == 'precio_unitario') {
            $this->calculateTotal();
        }
    }*/

    /* public function calculateTotal()
    {
        if (!empty($this->cantidad) && !empty($this->precio_unitario)) {
            $this->importe_total = $this->cantidad * $this->precio_unitario;
        }
    */

    public function save()
    {
        $this->validate([
            'nombre' => 'required',
            'meteria_id' => 'required|exists:materias,id',
            'carrera_id' => 'required|exists:carreras,id',
            'docente_id' => 'required|exists:docentes,id',
        ]);

        Grupo::create([
            'nombre' => $this->nonbre,
            'materia_id' => $this->materia_id,
            'docente_id' => $this->docente_id,
            
        ]);

         /*
        $almacen = Almacen::find($this->almacen_id);

        $parabrisa = $almacen->parabrisas()->where('parabrisas.id', $this->parabrisa_id)->first();
         //el parabrisa con el almacen esta relacionado
        if ($parabrisa) {
            $stockActual = $parabrisa->pivot->stock;
            $nuevoStock = $stockActual + $this->cantidad;
            $almacen->parabrisas()->updateExistingPivot($parabrisa->id, ['stock' => $nuevoStock]);
        } else {
            $almacen->parabrisas()->attach($this->parabrisa_id, ['stock' => $this->cantidad]);
        }*/



        
        $bitacora = new Bitacora();
        $bitacora->accion = '+++CREAR Grupo';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();

        return redirect()->route('grupos.index')->with('info', 'Nota de compra creada exitosamente');
    }

    public function render()
    {

        return view('livewire.create-grupo', [
            'carreras' => Carrera::all(),
            'docentes' => Docente::all(),
            'materias' => Materia::all(),
        ]);
    }
   
    
}
