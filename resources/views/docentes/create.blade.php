@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nuevo PARABRISA</h1>
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
                        'placeholder' => 'Escriba la medida del medio...',
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
                    {!! Form::label('materno', 'Materno: ') !!}
                    {!! Form::text('costado', null, [
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
                    {!! Form::text('sexo', null ,  [
                        'class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''),
                        'placeholder' => 'escriba el sexo del docente...',
                    ]) !!}
                    @error('sexo')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('pais', 'Pais: ') !!}
                    {!! Form::text('pais', null ,  [
                        'class' => 'form-control' . ($errors->has('pais') ? ' is-invalid' : ''),
                        'placeholder' => 'escriba el pais de origrn del docente...',
                    ]) !!}
                    @error('pais')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                
               
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









                
            </div>
       </div>



        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('descripciont', 'CURRICULUON: ') !!}
                    {!! Form::textarea('descripciont', null, [
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
