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
        {!! Form::model($estudiante, ['route' => ['estudiante.update', $estudiante], 'method' => 'put']) !!}

        
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
                    {!! Form::text('periodo', null, [
                        'class' => 'form-control' . ($errors->has('periodo') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el periodo del estudiante...',
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
                        'placeholder' => 'Escriba la modalidad de ingreso...',
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
    {!! Form::select('sexo', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino'], null, [
        'class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''),
        'placeholder' => 'Seleccione el sexo del estudiante...',
    ]) !!}
    @error('sexo')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

                <div class="form-group">
                    {!! Form::label('telefono', 'Telefono: ') !!}
                    {!! Form::text('telefono', null ,  [
                        'class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''),
                        'placeholder' => 'escriba el telefono del estudiante...',
                    ]) !!}
                    @error('telefono')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('pais', 'Pais: ') !!}
                    {!! Form::text('pais', null ,  [
                        'class' => 'form-control' . ($errors->has('pais') ? ' is-invalid' : ''),
                        'placeholder' => 'escriba el pais de origrn del estudiante...',
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
                        'placeholder' => 'escriba la edad del estudiante...',
                    ]) !!}
                    @error('email')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

              

                
                {!! Form::label('codigo', 'Registro: ') !!}
                {!! Form::number('codigo', null ,  [
                    'class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''),
                    'placeholder' => 'escriba el registro del estudiante...',
                ]) !!}
                @error('codigo')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento: ') !!}
                {!! Form::date('fecha_nacimiento', null ,  [
                    'class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''),
                    'placeholder' => 'escriba la fecha de nacimiento del estudiante...',
                ]) !!}
                @error('fecha_nacimiento')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> 
            
            <div class="form-group">
                {!! Form::label('titulo_bachiller', ' Titulo de bachiller: ') !!}
                {!! Form::text('titulo_bachiller', null ,  [
                    'class' => 'form-control' . ($errors->has('titulo_bachiller') ? ' is-invalid' : ''),
                    'placeholder' => 'escriba el codigo del titulo de bachiller...',
                ]) !!}
                @error('titulo_bachiller')
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
        </div> 

         
      

        {!! Form::submit('Editar estudiante', ['class' => 'btn btn-primary mt-2']) !!}

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
