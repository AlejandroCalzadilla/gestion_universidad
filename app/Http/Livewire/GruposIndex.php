<?php

namespace App\Http\Livewire;

use Livewire\Component;
Use App\Models\Grupo;
use Livewire\WithPagination;
class GruposIndex extends Component
{


    use WithPagination;
    public $buscar;
    protected $paginationTheme = "bootstrap";

    public function render()
    {
        
        $grupos = Grupo::where('nombre', 'LIKE', '%' . $this->buscar . '%')
        ->orderBy('id', 'ASC')  // Add this line
        ->paginate(6);
        //return view('livewire.admin-users', compact('users'));
        //$docentes =Docente::orderBy('id', 'DESC')->paginate(6);     
        return view('livewire.grupos-index',compact('grupos'));
    }
    public function limpiar_page(){
        $this->resetPage();
    }
    



}
