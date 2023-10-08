{{-- 
@extends('adminlte::page')

@section('title', 'Estudiante')

@section('content_header')
   
@stop

@section('content')   

<div class="container">
    <form action="{{url('/estudiante')}}" method="POST" enctype="multipart/form-data">
         @csrf
         @include('estudiante.formulario', ['modo'=>'Crear'])
    </form>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}





@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Nuevo Estudiante</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'estudiante.store']) !!}
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre: ') !!}
                    {!! Form::text('nombre', null, [
                        'class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el nombre del estudiante...',
                    ]) !!}
                    @error('nombre')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('ci', 'CI: ') !!}
                    {!! Form::number('ci', null, [
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
                    {!! Form::label('periodo', 'Periodo: ') !!}
                    {!! Form::number('periodo', null, [
                        'class' => 'form-control' . ($errors->has('periodo') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el apellido paterno del docente...',
                    ]) !!}
                    @error('periodo')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> 

                 <div class="form-group">
                    {!! Form::label('modalidad_ingreso', 'Modalidad de ingreso: ') !!}
                    {!! Form::text('modalidad_ingreso', null, [
                        'class' => 'form-control' . ($errors->has('modalidad_ingreso') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el apellido materno del docente...',
                    ]) !!}
                    @error('modalidad_ingreso')
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
        </div> 

        <div class="row">
            <div class="col-md-6">
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

                <div class="form-group">
                    {!! Form::label('telefono', 'Telefono: ') !!}
                    {!! Form::number('telefono', null ,  [
                        'class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''),
                        'placeholder' => 'escriba la edad del docente...',
                    ]) !!}
                    @error('telefono')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                
                {!! Form::label('codigo', 'Registro: ') !!}
                {!! Form::number('codigo', null ,  [
                    'class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''),
                    'placeholder' => 'escriba la edad del docente...',
                ]) !!}
                @error('codigo')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento: ') !!}
                {!! Form::text('fecha_nacimiento', null ,  [
                    'class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''),
                    'placeholder' => 'escriba la edad del docente...',
                ]) !!}
                @error('fecha_nacimiento')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> 
            
            <div class="form-group">
                {!! Form::label('titulo_bachiller', ' Titulo de bachiller: ') !!}
                {!! Form::number('titulo_bachiller', null ,  [
                    'class' => 'form-control' . ($errors->has('titulo_bachiller') ? ' is-invalid' : ''),
                    'placeholder' => 'escriba la edad del docente...',
                ]) !!}
                @error('titulo_bachiller')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> 

            <div class="form-group">
                {!! Form::label('id', 'id: ') !!}
                {!! Form::number('id', null ,  [
                    'class' => 'form-control' . ($errors->has('id') ? ' is-invalid' : ''),
                    'placeholder' => 'escriba la edad del docente...',
                ]) !!}
                @error('id')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> 

            </div> 
        </div> 

         
      

{{-- 

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('descripcionT', 'CURRICULUON: ') !!}
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
        </div> --}}

        {!! Form::submit('Crear Estudiante', ['class' => 'btn btn-primary mt-2']) !!}

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
