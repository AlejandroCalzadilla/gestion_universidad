<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carrera;
use App\Models\Materia;
use App\Models\CarreraMateria;
class CarreraEdit extends Component
{
    public $carrera;
    public $materia_id;
    public $semestre;
    public $credito;
    public $materias; 

    //es como un constructor
    public function mount(Carrera $carrera)
    {
        $this->carrera = $carrera;
        $this->materias = Materia::all();
    }



    //saca las que no estan registradas en la carrera
    public function getMateriasDisponibles()
    {
        // Obtiene todas las materias disponibles para la carrera actual
        $materias = Materia::whereNotIn('id', $this->carrera->materias->pluck('id'))->get() ;
    
        return $materias;
    }




    public function agregarMateria()
    {
        // Validar los datos del formulario si es necesario
        $this->validate([
            'materia_id' => 'required',
            'semestre' => 'required',
            'credito' => 'required',
        ]);

        // Crear un nuevo registro en la tabla carrera_materia
        CarreraMateria::create([
            'carrera_id' => $this->carrera->id,
            'materia_id' => $this->materia_id,
            'semestre' => $this->semestre,
            'credito' => $this->credito,
        ]);
       
        
        // Limpiar los campos del formulario
        $this->reset(['materia_id', 'semestre', 'credito']);
    }


    public function eliminarMateria($carreraMateriaId)
    {
        // Encuentra y elimina la relación carrera-materia por su ID
        CarreraMateria::findOrFail($carreraMateriaId)->delete();
       // return view('carreras.index');
    }


    public function render()
    {
        return view('livewire.carrera-edit');
    }

    public function limpiar_page(){
        $this->resetPage();
    }
  
}
