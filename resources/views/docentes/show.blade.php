
@extends('adminlte::page')

@section('title', 'estudiante')

@section('content_header')

@stop



@section('content')    



@if ($docentes)
<h1>Información del Docente</h1>

<div>
     


@if ($docentes->count())
    <div class="card-body">
        <div class="table-responsive">
            <ul >
                <li><strong>ID:</strong> {{ $docentes->id }}</li>
                <br>
                <li><strong>CODIGO:</strong> {{ $docentes->codigo }}</li>
                <br>
                <li><strong>CI:</strong> {{ $docentes->ci }}</li>
                <br>
                <li><strong>NOMBRE:</strong> {{ $docentes->nombre }}</li>
                <br>
                <li><strong>SEXO:</strong> {{ $docentes->sexo }}</li>
                <br>
                <li><strong>TELEFONO:</strong> {{ $docentes->telefono }}</li>
                <br>
                <li><strong>FECHA DE NACIMIENTO:</strong> {{ $docentes->fecha_nacimiento }}</li>
                <br>
                <li><strong>MODALIDAD DE INGRESO:</strong> {{ $docentes->modalidad_ingreso }}</li>
                <br>
                <li><strong>PERIODO:</strong> {{ $docentes->periodo }}</li>
                <br>
                <li><strong>PAIS:</strong> {{ $docentes->pais }}</li>
                <br>
                <li><strong>TITULO DE BACHILLER:</strong> {{ $docentes->titulo_bachiller }}</li>
            </ul>
        </div>
    </div>
@else
    <div class="card-body">
        <strong>No hay registros ...</strong>
    </div>
@endif




</div>

{{-- <p>Edad: {{ $estudiante->edad }}</p> --}}
<!-- Agregar más campos según sea necesario -->
@else
<p>No se encontró información del docente.</p>
@endif
   



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop 




