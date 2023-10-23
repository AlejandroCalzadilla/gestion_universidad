@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nuevo Docente</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'docentes.store']) !!}
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('nomre', 'Nombre: ') !!}
                    {!! Form::text('nombre', null, [
                        'class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el nombre del docente...',
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
                        'placeholder' => 'Escriba el carnet de identidad...',
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
                    {!! Form::label('paterno', 'Apellido Paterno: ') !!}
                    {!! Form::text('paterno', null, [
                        'class' => 'form-control' . ($errors->has('paterno') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el apellido paterno del docente...',
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
                        'class' => 'form-control' . ($errors->has('materno') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el apellido materno del docente...',
                    ]) !!}
                    @error('materno')
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
                    {!! Form::label('sexo', 'Sexo: ') !!}
                    {!! Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], null, [
                        'class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''),
                        'placeholder' => 'Seleccione el sexo...',
                    ]) !!}
                    @error('sexo')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                
               
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


            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('edad', 'Edad: ') !!}
                    {!! Form::text('edad', null ,  [
                        'class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''),
                        'placeholder' => 'escriba la edad del docente...',
                    ]) !!}
                    @error('edad')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="form-group">
                    {!! Form::label('email', 'Email: ') !!}
                    {!! Form::email('email', null ,  [
                        'class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''),
                        'placeholder' => 'escriba la edad del docente...',
                    ]) !!}
                    @error('email')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>









                
            </div>
       </div>



        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('descripcionT', 'CURRICULUM: ') !!}
                    {!! Form::textarea('descripcionT', null, [
                        'class' => 'form-control' . ($errors->has('descripciont') ? ' is-invalid' : ''),
                        'placeholder' => 'detalle el curriculuom del docente..',
                        'rows' => 4,
                    ]) !!}
                    @error('descripciont')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        {!! Form::submit('Crear Docente', ['class' => 'btn btn-primary mt-2']) !!}

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
