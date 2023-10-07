@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nueva Carrera</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'carreras.store']) !!}
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('nomre', 'Nombre: ') !!}
                    {!! Form::text('nombre', null, [
                        'class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el nombre de la carrera...',
                    ]) !!}
                    @error('nombre')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('facultad', 'Facultad: ') !!}
                    {!! Form::text('facultad', null, [
                        'class' => 'form-control' . ($errors->has('facultad') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el nombre de la facultad...',
                    ]) !!}
                    @error('facultad')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

      

        {!! Form::submit('Crear Carrera', ['class' => 'btn btn-primary mt-2']) !!}

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
