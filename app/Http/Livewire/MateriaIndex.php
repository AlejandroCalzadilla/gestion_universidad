<?php

namespace App\Http\Livewire;
use App\Models\Materia;
use Livewire\Component;
use Livewire\WithPagination;

class MateriaIndex extends Component
{
    use WithPagination;
    public $buscar;
    protected $paginationTheme = "bootstrap";

    public function render()
    {
        
        $materias = Materia::where('sigla', 'LIKE', '%' . $this->buscar . '%')
        ->orWhere('nombre', 'LIKE', '%' . $this->buscar . '%')
        ->orderBy('id', 'ASC')  // Add this line
        ->paginate(6);
        //return view('livewire.admin-users', compact('users'));
        //$docentes =Docente::orderBy('id', 'DESC')->paginate(6);     
        return view('livewire.materia-index',compact('materias'));
    }
    public function limpiar_page(){
        $this->resetPage();
    }
}
