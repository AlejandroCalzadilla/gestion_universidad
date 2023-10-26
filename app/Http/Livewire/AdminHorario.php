<?php

namespace App\Http\Livewire;
use App\Models\Horario;
use Livewire\Component;
use App\Models\Bitacora;
use App\Models\Carrera;
use App\Models\Docente;
use App\Models\Materia;


use Livewire\WithPagination;

class AdminHorario extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
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
        }*/
        /*
        public function deleteCompra($horario_id)
        {     
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
        //return view('livewire.admin-horario');
        $nota_compras = Horario::query();
        //return view('livewire.admin.horario');
    
        return view('livewire.admin-horario', [
            'docentes' => Docente::all(),
            
        ]);
   
    }
*/






  


    public $filtroProveedor;
    public $filtroAlmacen;
    public $filtroDesdeFecha;
    public $filtroHastaFecha;

    public $docentes;
    public $materias;
    public $carreras;
    public function mount()
    {
        $this->docentes = Docente::all();
        $this->materias = Materia::all();
        $this->carreras = Carrera::all();
    }

    public function delete($horario_id)
    {
     
        // Ahora puedes eliminar la NotaCompra
        $horario= Horario::find($horario_id);
        $horario->delete();

        $bitacora = new Bitacora();
        $bitacora->accion = 'XXX ELIMINAR Horario';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();
        
        return back()->with('info', 'Horario eliminado exitosamente.');
    }
  

    public function aplicarFiltros()
    {
        // Este método se dispara cuando el usuario hace clic en el botón "Aplicar filtros"
        // No necesitas hacer nada aquí porque los datos se actualizan automáticamente gracias a Livewire
    }

    public function resetFiltros()
    {
        $this->reset(['filtroNivel', 'filtroDocente', 'filtroCupos']);
    }
    public function updatedFiltroNivel()
    {
        $this->limpiar_page();
    }

    public function updatedFiltroDocente()
    {
        $this->limpiar_page();
    }

    public function updatedFiltroCupos()
    {
        $this->limpiar_page();
    }

    

    public function limpiar_page()
    {
        $this->resetPage();
    }
    
    
    public function render()
    {
        $horarios = Horario::query();
      /*
        if ($this->filtroNivel) {
            $horarios->where('materia_id', $this->filtroProveedor);
        }

        if ($this->filtroAlmacen) {
            $horarios->where('docente_id', $this->filtroAlmacen);
        }

        if ($this->filtroDesdeFecha) {
            $horarios->whereDate('cupo', '>=', $this->filtroDesdeFecha);
        }

     */

        $horarios = $horarios->paginate(6);

        return view('livewire.admin-horario', compact('horarios'));
    }
}
