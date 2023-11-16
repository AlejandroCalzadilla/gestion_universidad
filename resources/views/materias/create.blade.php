@extends('adminlte::page')

@section('title', 'Crear ')

@section('content_header')
    <h1>Nueva Materia</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'materias.store']) !!}
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('sigla', 'SIGLA: ') !!}
                    {!! Form::text('sigla', null, [
                        'class' => 'form-control' . ($errors->has('sigla') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el nombre del docente...',
                    ]) !!}
                    @error('sigla')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('nombre', 'NOMBRE: ') !!}
                    {!! Form::text('nombre', null, [
                        'class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el carnet de identidad...',
                    ]) !!}
                    @error('nombre')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('semestre', 'Semestre: ') !!}
                    {!! Form::text('semestre', null, [
                        'class' => 'form-control' . ($errors->has('semestre') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el carnet de identidad...',
                    ]) !!}
                    @error('semestre')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('credito', 'Credito: ') !!}
                    {!! Form::text('credito', null, [
                        'class' => 'form-control' . ($errors->has('semestre') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el carnet de identidad...',
                    ]) !!}
                    @error('semestre')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
               

                <div class="form-group">
                    <label for="carrera_id">Materia</label>
                    <select name="carrera_id"  class="form-control">
                        <option value="">seleccione una carrera</option> 
                        @foreach ($carreras as $carrera)
                            <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                        @endforeach
                    </select>
                </div> 
                


            </div>

           
        </div>


        {!! Form::submit('Crear Materia', ['class' => 'btn btn-primary mt-2']) !!}

        {!! Form::close() !!}
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
