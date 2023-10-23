@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Docente</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($docente, ['route' => ['docentes.update', $docente], 'method' => 'put']) !!}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre: ') !!}
                    {!! Form::text('nombre', null, [
                        'class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba la nombre del docente...',
                    ]) !!}
                    @error('nombre')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('ci', 'CI: ') !!}
                    {!! Form::text('ci', null, [
                        'class' => 'form-control' . ($errors->has('ci') ? ' is-invalid' : ''),
                        'placeholder' => 'CI Docente ejemplo  8988988LP',
                    ]) !!}
                    @error('ci')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('paterno', 'Apelldio Paterno: ') !!}
                    {!! Form::text('paterno', null, [
                        'class' => 'form-control' . ($errors->has('paterno') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el apellido materno...',
                    ]) !!}
                    @error('paterno')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('materno', 'Apellido Materno: ') !!}
                    {!! Form::text('materno', null, [
                        'class' => 'form-control' . ($errors->has('costado') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el apellido materno...',
                    ]) !!}
                    @error('costado')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('sexo', 'sexo: ') !!}
                    {!! Form::text('sexo', null, [
                        'class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''),
                        'placeholder' => 'Seleccione el sexo...',
                    ]) !!}
                    @error('sexo')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> 
                <div class="form-group">
                    {!! Form::label('edad', 'Edad: ') !!}
                    {!! Form::text('edad', null, [
                        'class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''),
                        'placeholder' => 'Seleccione el sexo...',
                    ]) !!}
                    @error('edad')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> 
                <div class="form-group">
                    {!! Form::label('user_id', 'Usuarios libres: ') !!}
                    {!! Form::select('user_id', $users->pluck('email', 'id'), null, [
                        'class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''),
                        'placeholder' => 'Seleccione la cuenta de usuario...',
                    ]) !!}
                    @error('user_id')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                 
            </div>

            <div class="col-md-6">

               
                <div class="form-group">
                    {!! Form::label('email', 'Email: ') !!}
                    {!! Form::email('email', null, [
                        'class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''),
                        'placeholder' => 'Seleccione el Pais de origen...',
                    ]) !!}
                    @error('email')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> 
                {{-- <div class="form-group">
                    {!! Form::label('vehiculo_id', 'Vehículo: ') !!}
                    {!! Form::select('vehiculo_id', $vehiculos->pluck('descripcion', 'id'), null, [
                        'class' => 'form-control' . ($errors->has('vehiculo_id') ? ' is-invalid' : ''),
                        'placeholder' => 'Seleccione un vehículo...',
                    ]) !!}
                    @error('vehiculo_id')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> --}}
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('descripcionT', 'Curriculum: ') !!}
                    {!! Form::textarea('descripcionT', null, [
                        'class' => 'form-control' . ($errors->has('descripcionT') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el curriculum del docente...',
                        'rows' => 4,
                    ]) !!}
                    @error('DescripcionT')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        {!! Form::submit('Editar Docente', ['class' => 'btn btn-primary mt-2']) !!}

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