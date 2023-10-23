<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Docente;
use App\Models\Materia;
use App\Models\Carrera;
use App\Models\Bitacora;
use App\Models\Horario;
use App\Models\CarreraMateria;
class CreateHorario extends Component
{
    public $cupos;
    public $horario;
   // public $precio_unitario;
    public $materia_id;
    //public $importe_total;
    public $carrera_id;
    public $docente_id;
     public $materias;
    public function updated($propertyName)
    {
        if ($propertyName == 'cantidad' || $propertyName == 'precio_unitario') {
            $this->calculateTotal();
        }
    }

   //  public function calculateTotal()
    //{
     //   if (!empty($this->cantidad) && !empty($this->precio_unitario)) {
      //      $this->importe_total = $this->cantidad * $this->precio_unitario;
       // }
   // }
   public $materiasCarrera;

   public function updatedCarreraId()
   {
       $this->materiasCarrera = CarreraMateria::where('carrera_id', $this->carrera_id)->pluck('materia_id');
   }
   
    

    public function save()
    {
        $this->validate([
            'cupos' => 'required|integer|min:1',
           
            'horario' => [
                'required',
                'string',
                'regex:/^[a-z]{2}-\d{2}:\d{2}-\d{2}:\d{2}-\d{3}-\d{2}(-[a-z]{2}-\d{2}:\d{2}-\d{2}:\d{2}-\d{3}-\d{2}){0,4}$/i',
            ],

            'materia_id' => 'required|exists:materias,id',
            'docente_id' => 'required|exists:docentes,id',
            'carrera_id' => 'required|exists:carreras,id',
        ]);
        
        //$this->horario = str_replace(' ', '', $this->horario);
  
        Horario::create([
            'cupos' => $this->cupos,
            'horario' => $this->horario,
            'materia_id' => $this->materia_id,
            'docente_id' => $this->docente_id,
            'carrera_id' => $this->carrera_id,
        ]);

      

        $bitacora = new Bitacora();
        $bitacora->accion = '+++CREAR HORARIO';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();

        return redirect()->route('horarios.index')->with('info', 'horario creada exitosamente');
    }

   


    public function render()
    {
        return view('livewire.create-horario',[
        'docentes' => Docente::all(),
        'materias' => Materia::all(),
        'carreras' => Carrera::all(), 
        //'materias' =>Materia::whereIn('id', $this->carrera->materias->pluck('id'))->get(),
         
        ]
        
        );
    }
}
