<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;
use Livewire\WithPagination;
class EstudianteComponente extends Component
{
    use WithPagination;
    public $buscar;
    protected $paginationTheme = "bootstrap";
      

    public function render()
    {

        $estudiante = Estudiante::where('nombre', 'LIKE', '%' . $this->buscar . '%')
        ->orWhere('email', 'LIKE', '%' . $this->buscar . '%')
        ->orderBy('id', 'DESC')  // Add this line
        ->paginate(6);
        //return view('livewire.admin-users', compact('users'));
        //$docentes =Docente::orderBy('id', 'DESC')->paginate(6);     
        return view('livewire.estudiante-componente',compact('estudiante'));
    }

    public function limpiar_page(){
        $this->resetPage();
    }
}
