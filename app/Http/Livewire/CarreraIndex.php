<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carrera;
use Livewire\WithPagination;
class CarreraIndex extends Component
{

    use WithPagination;
    public $buscar;
    protected $paginationTheme = "bootstrap";

    public function render()
    {
        
        $carreras = Carrera::where('nombre', 'LIKE', '%' . $this->buscar . '%')
        ->orWhere('facultad', 'LIKE', '%' . $this->buscar . '%')
        ->orderBy('id', 'ASC')  // Add this line
        ->paginate(6);
        //return view('livewire.admin-users', compact('users'));
        //$docentes =Docente::orderBy('id', 'DESC')->paginate(6);     
        return view('livewire.carrera-index',compact('carreras'));
    }
    public function limpiar_page(){
        $this->resetPage();
    }
}
