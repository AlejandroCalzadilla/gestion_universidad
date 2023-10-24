<?php

namespace App\Http\Livewire;
use App\Models\Horario;
use App\Models\Bitacora;
use App\Models\Materia;
use App\Models\Carrera;
use App\Models\Docente;
use Livewire\Component;



class Edithorario extends Component
{

    public $horarioId;
    public $cupos;
    public $precio_unitario;
    public $importe_total;
    public $fecha;
    public $materia_id;
    public $docente_id;
    public $carrera_id;

    public function mount(Horario $horario)
    {
        $this->horarioId = $horario->id;
        $this->cupos = $horario->cupos;
        $this->materia_id = $horario->materia_id;
        $this->docente_id = $horario->docente_id;
        $this->carrera_id = $horario->carrera_id;
    }

    

    public function save()
    {
        $this->validate([
            'cupos' => 'required|integer|min:1',
            'materia_id' => 'required|exists:materias,id',
            'docente_id' => 'required|exists:docentes,id',
            'carrera_id' => 'required|exists:carreras,id',
        ]);

        // Buscar la NotaCompra existente y actualizarla
       
        $horario = Horario::find($this->horarioId); 
        $horario->update([
            'cupos' => $this->cupos,
            'materia_id' => $this->materia_id,
            'docente_id' => $this->docente_id,
            'carrera_id' => $this->carrera_id,
        ]);

       
        
        $bitacora = new Bitacora();
        $bitacora->accion = '***ACTUALIZAR HORARIO';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();
        
        return redirect()->route('horarios.index')->with('info', 'Horario actualizada exitosamente');
    }

    public function render()
    {
        return view('livewire.edithorario', [
            'materias' => Materia::all(),
            'carreras' => Carrera::all(),
            'docentes' => Docente::all(),
        ]);
    }
   
}
