
@extends('adminlte::page')

@section('title', 'estudiante')

@section('content_header')
    <h1>Editar  grupo</h1>
@stop

@section('content')    
<div class="card">
    <div class="card-body">
        {!! Form::model($grupo, ['route' => ['grupos.update', $grupo],
        'method' => 'put']) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre: ') !!}
                    {!! Form::text('nombre', null, [
                        'class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el nombre del grupo...',
                    ]) !!}
                    @error('nombre')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        {!! Form::submit('Actualizar grupo', ['class' => 'btn btn-primary mt-2']) !!}

        {!! Form::close() !!}
    </div>
</div>   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop 