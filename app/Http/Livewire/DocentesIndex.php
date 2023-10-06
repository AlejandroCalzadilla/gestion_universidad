<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Docente;
class DocentesIndex extends Component
{
    public function render()
    {
        $docentes =Docente::orderBy('id', 'DESC')->paginate(6);     
        return view('livewire.docentes-index',compact('docentes'));
    }
}
