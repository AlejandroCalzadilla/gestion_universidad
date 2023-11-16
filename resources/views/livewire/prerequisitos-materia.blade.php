<div>
   <br>

   {{-- <div class="card header">
    @can('Crear materias')
                <div class="card-header">
                    <a class="btn btn-secondary" href="{{ route('prerequisitos.create',$materia) }}">NUEVO PREREQUISITO</a>
                </div>
            @endcan
    </div>      --}}
    
<div class="card p-5">
<h3>Materia: {{$materia->nombre}}</h3>
<p>Semestre: {{$materia->semestre}}</p>
<p>carrera:{{$materia->carrera->nombre}}</p>
</div>


    <div class="card">
       
            <div class="col-md-6">
                @if ($prerequisitos->count())
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="table-info">
                            <tr>
        
                                {{-- en descripcion ira vehiculo con marca --}}
                                <th>nombre prerequisito</th>
                                <th></th>
                                
                                   
                            </tr>
                        </thead>
                        <tbody>
                          

                      @foreach ($prerequisitos as $prerequisito)
                       <tr>
                         <td>
                            @php
                            $nombremat = DB::table('materias')->where('id', $prerequisito->prerequisito_id)->first(); 
                            $nombre = $nombremat->nombre;
                            @endphp
                              
                             {{$nombre}} 
                                                        
                        </td> 
                         <td>     
                            {{-- {{$prerequisito}} --}}
                            <form action="{{ route('prerequisitos.destroy', $prerequisito) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit"><i
                                        class="fas fa-user-minus"></i></button>
                            </form>
                            {{-- <button wire:click="eliminarPrerequisito({{ $prerequisito}} )">Eliminar</button> --}}
                         </td>
                       </tr>
                    @endforeach
                    

                        </tbody>
                    </table>
            
                </div>  
                @else
                    <div class="card-body">
                        <strong>No hay registros ...</strong>
                    </div>
                @endif
        
        
            </div> 
   </div>
   <div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'prerequisitos.store']) !!}
        
        <div class="row">
              @php
                   // $pres = Materia::where('id', '<>', $materia->id)->where('carrera_id', '=', $materia->carrera_id) ->get();
                    $juane = DB::select("SELECT * FROM materias WHERE id <> ? AND carrera_id = ? and semestre <?", [$materia->id, $materia->carrera_id,$materia->id]);

              @endphp
                  
                  <div class="form-group">
                    <label for="materia_id">Materia</label>
                    <select name="materia_id"  class="form-control">
                        <option value="{{$materia->id}}">{{$materia->nombre}}</option> 
                        
                    </select>
                </div> 
                    <br>

                  {{-- <div class="form-group">
                    <label for="prerequisito_id">Materia</label>
                    <select name="prerequisito_id"  class="form-control">
                        <option value="">seleccione una materia prerequisito</option> 
                        @foreach ($juane as $pre)
                            <option value="{{ $pre->id }}">{{ $pre->nombre }}</option>
                        @endforeach
                    </select>
                </div>   --}}
                <div class="form-group">
                    <label for="prerequisito_id">Materia</label>
                    <select name="prerequisito_id" class="form-control">
                        @if (count($juane) === 0)
                            <option value="" disabled selected>No hay materias disponibles</option>
                        @else
                            <option value="">seleccione una materia prerequisito</option>
                            @foreach ($juane as $pre)
                                <option value="{{ $pre->id }}">{{ $pre->nombre }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                


            </div>

           
        


        {!! Form::submit('Crear Prerequisito', ['class' => 'btn btn-primary mt-2']) !!}

        {!! Form::close() !!}
    </div>
</div>

{{-- <div>
    <label for="nuevoPrerequisito">Añadir Prerequisito:</label>
    <select id="nuevoPrerequisito" wire:model="nuevoPrerequisito">
        @foreach ($materia->all() as $m)
            <option value="{{ $m->id }}">{{ $m->nombre }}</option>
        @endforeach
    </select>
    <button wire:click="agregarPrerequisito">Agregar</button>
</div> --}}
    {{-- <div class="card-body">

        <div class="row">
            <div class="col-md-6">
        <h2>Agregar Materias a Carrera: {{ $carrera->nombre }}</h2>
        <form wire:submit.prevent="agregarMateria">
            <div class="form-group">
                <label for="materia_id">Materia</label>
                <select wire:model="materia_id" class="form-control">
                    <option value="">Selecciona una materia</option>
                    @foreach ($this->getMateriasDisponibles() as $materia)
                        <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="semestre">Semestre</label>
                <input wire:model="semestre" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="credito">Crédito</label>
                <input wire:model="credito" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Agregar Materia</button>
        </form>
    </div>
    </div>
    


    </div>
     --}}

    




</div>