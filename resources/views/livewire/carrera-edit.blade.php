<div class="card">
    <div class="card-body">
        {!! Form::model($carrera, ['route' => ['carreras.update', $carrera], 'method' => 'put']) !!}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre: ') !!}
                    {!! Form::text('nombre', null, [
                        'class' => 'form-control' . ($errors->has('sigla') ? ' is-invalid' : ''),
                        'placeholder' => 'nombre de carrera...',
                    ]) !!}
                    @error('sigla')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('facultad', 'Nombre: ') !!}
                    {!! Form::text('facultad', null, [
                        'class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''),
                        'placeholder' => 'nombre de facultad',
                    ]) !!}
                    @error('nombre')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('tipo', 'Tipo: ') !!}
                    {!! Form::select('tipo', ['Semestral' => 'Semestral', 'Anual' => 'Anual','Mensual' => 'Mensual'], null, [
                        'class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''),
                        'placeholder' => 'Seleccione el tipo de carrera...',
                    ]) !!}
                    @error('tipo')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>
            {{-- <div class="col-md-6">
                @if ($carrera->count())
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="table-info">
                            <tr>
        
                               
                                <th>nombre</th>
                                <th>semestre</th>
                                <th>creditos</th>
                               
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carrera->materias as $materia)
                                <tr>
        
                                    <td>
                                        {{ $materia->nombre }}
                                    </td>
                                    <td>
                                        {{ $materia->pivot->semestre }}
                                    </td>
                                    <td>
                                        <button  wire:click="eliminarMateria({{ $materia->pivot->id }})">Eliminar</button>
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
        
        
                <div class="card-footer">
                    
                </div>
        
        
            </div>  --}}
             
            
           
        </div>
        
       

        {!! Form::submit('Editar  materia', ['class' => 'btn btn-primary mt-2']) !!}

        {!! Form::close() !!}
    </div>

     <div class="card-body">
       {{--
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
     --}}


    </div>
    

    




</div>