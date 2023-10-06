<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Docente;
use Livewire\WithPagination;
class DocentesIndex extends Component
{
    use WithPagination;
    public $buscar;
    protected $paginationTheme = "bootstrap";
      

    public function render()
    {


        $docentes = Docente::where('nombre', 'LIKE', '%' . $this->buscar . '%')
        ->orWhere('email', 'LIKE', '%' . $this->buscar . '%')
        ->orderBy('id', 'DESC')  // Add this line
        ->paginate(6);
        //return view('livewire.admin-users', compact('users'));
        //$docentes =Docente::orderBy('id', 'DESC')->paginate(6);     
        return view('livewire.docentes-index',compact('docentes'));
    }

    public function limpiar_page(){
        $this->resetPage();
    }

}
