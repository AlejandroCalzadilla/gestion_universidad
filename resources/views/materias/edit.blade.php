@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar materia</h1>
@stop

@section('content')



<div class="card">
    <div class="card-body">
        {!! Form::model($materia, ['route' => ['materias.update', $materia], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('sigla', 'Sigla: ') !!}
            {!! Form::text('sigla', null, [
                'class' => 'form-control' . ($errors->has('sigla') ? ' is-invalid' : ''),
                'placeholder' => 'Escriba la sigla...',
            ]) !!}
            @error('nombre')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('nombre', 'Nombre: ') !!}
            {!! Form::text('nombre', null, [
                'class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''),
                'placeholder' => 'Escriba el email...',
            ]) !!}
            @error('email')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        
        {!! Form::submit('Actualizar materia', ['class' => 'btn btn-primary mt-2']) !!}

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