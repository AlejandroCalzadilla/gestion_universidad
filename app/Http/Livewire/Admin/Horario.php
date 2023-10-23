<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Docente;
use App\Models\Bitacora;
use Livewire\WithPagination;

class Horario extends Component
{
  /*
    public function save()
    {
        $this->validate([
            
            'hora_inicio' => 'required|date',
            'hora_fin' => 'required|date',
            'docente_id' => 'required|exists:docentes,id',
            
        ]);

        Horario::create([
            
            'hora_inicio' => $this->hora_incio,
            'hora_fin' => $this->hora_fin,
            
            'docente_id' => $this->almacen_id,
            
        ]);

        //$almacen = Almacen::find($this->almacen_id);

        //$parabrisa = $almacen->parabrisas()->where('parabrisas.id', $this->parabrisa_id)->first();
         //el parabrisa con el almacen esta relacionado
        /*if ($parabrisa) {
            $stockActual = $parabrisa->pivot->stock;
            $nuevoStock = $stockActual + $this->cantidad;
            $almacen->parabrisas()->updateExistingPivot($parabrisa->id, ['stock' => $nuevoStock]);
        } else {
            $almacen->parabrisas()->attach($this->parabrisa_id, ['stock' => $this->cantidad]);
        }
        

        $bitacora = new Bitacora();
        $bitacora->accion = '+++CREAR Horario';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();

        return redirect()->route('horarios.index')->with('info', 'Horario creado exitosamente');
    }



    public function render()
    {
        $nota_compras = Horario::query();
        //return view('livewire.admin.horario');
    
        return view('livewire.admin.horario', [
            'docentes' => Docente::all(),
            
        ]);
    
    
    }*/
    use WithPagination;
    protected $paginationTheme = "bootstrap";


    public $filtroProveedor;
    public $filtroAlmacen;
    public $filtroDesdeFecha;
    public $filtroHastaFecha;

    public $docentes;
    public $almacenes;

    public function mount()
    {
        $this->docentes = Docente::all();
       // $this->almacenes = Almacen::all();
    }

    public function deleteCompra($horario_id)
    {
       /*  $compra = NotaCompra::find($nota_compra_id);

        // Buscar el Almacén y Parabrisa asociados con la NotaCompra
        $almacen = Almacen::find($compra->almacen_id);
        $parabrisa = $almacen->parabrisas()->where('parabrisas.id', $compra->parabrisa_id)->first();

        if ($parabrisa) {
            // Si el Parabrisa está asociado con el Almacén, resta la cantidad de la NotaCompra del stock
            $stockActual = $parabrisa->pivot->stock;
            $nuevoStock = $stockActual - $compra->cantidad;
            if ($nuevoStock >= 0) { // Evita tener stock negativo
                $almacen->parabrisas()->updateExistingPivot($parabrisa->id, ['stock' => $nuevoStock]);
            } else {
                return back()->with('error', 'No se puede eliminar la Nota de Compra. El stock resultante sería negativo.');
            }
        }
        */  
        // Ahora puedes eliminar la NotaCompra
        $horario= Horario::find($horario_id);
        $horario->delete();

        $bitacora = new Bitacora();
        $bitacora->accion = 'XXX ELIMINAR Horario';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();
        
        return back()->with('info', 'Horario eliminada y stock actualizado exitosamente.');
    }
  

  
    public function render()
    {
        $horarios = Horario::query();

        $horarios = $horarios->paginate(6);

        return view('livewire.admin-horario', compact('horarios'));
    }

    
}
