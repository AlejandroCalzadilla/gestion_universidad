<div class="card">
    <div class="card-body">
        {!! Form::model($carrera, ['route' => ['docentes.update', $carrera], 'method' => 'put']) !!}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre: ') !!}
                    {!! Form::text('nombre', null, [
                        'class' => 'form-control' . ($errors->has('sigla') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba la nombre del docente...',
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
                        'placeholder' => 'CI Docente ejemplo  8988988LP',
                    ]) !!}
                    @error('nombre')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

           
        </div>

       

       

        {!! Form::submit('Editar  materia', ['class' => 'btn btn-primary mt-2']) !!}

        {!! Form::close() !!}
    </div>

    <div>
        <h2>Agregar Materias a Carrera: {{ $carrera->nombre }}</h2>
        <form wire:submit.prevent="agregarMateria">
            <div class="form-group">
                <label for="materia_id">Materia</label>
                <select wire:model="materia_id" class="form-control">
                    <option value="">Selecciona una materia</option>
                    @foreach ($materias as $materia)
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