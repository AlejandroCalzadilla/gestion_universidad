<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Prerequisito;
use App\Models\Materia;

class PrerequisitosMateria extends Component
{


    public $materia;
    public $prerequisitos;
    public $nuevoPrerequisito;
    public $materias_prerequisitos;
    public function mount(Materia $materia) 
    {
        $this->materia = $materia;
        $this->prerequisitos= Prerequisito::where('materia_id', $materia->id)->get();       
    }
   
   
    public function agregarPrerequisito()
    {
        Prerequisito::create([
            //materia que ya esta
            'materia_id' => $this->materia->id,
            'prerequisito_id' => $this->nuevoPrerequisito,
        ]);
        
        $this->nuevoPrerequisito = '';
        $this->prerequisitos = $this->materia->prerequisitos;
    }

    public function eliminarPrerequisito(Prerequisito $prerequisito)
    { 
        $prerequisito->delete();  
        return view('materias.index');
    }


    public function render()
    {
        return view('livewire.prerequisitos-materia');
    }

   
}
