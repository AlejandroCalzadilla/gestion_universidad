
@extends('adminlte::page')

@section('title', 'estudiante')

@section('content_header')

@stop



@section('content')    



{{-- @if ($estudiante) --}}
<h1>Información del Estudiante</h1>

<div>
     




    <div class="card-body">
        <div class="table-responsive">
            <ul >
                
            
            <ul class="row w-100">
                <li class="col-md-5 card p-3 m-1"><strong>CODIGO:</strong> {{ $estudiante->codigo }}</li>
                <li class="col-md-5 card p-3 m-1"><strong>CI:</strong> {{ $estudiante->ci }}</li>
                <li class="col-md-5 card p-3 m-1"><strong>NOMBRE:</strong> {{ $estudiante->nombre }}</li>
                <li class="col-md-5 card p-3 m-1"><strong>SEXO:</strong> {{ $estudiante->sexo }}</li>
                <li class="col-md-5 card p-3 m-1"><strong>TELEFONO:</strong> {{ $estudiante->telefono }}</li>
                <li class="col-md-5 card p-3 m-1"><strong>FECHA DE NACIMIENTO:</strong> {{ $estudiante->fecha_nacimiento }}</li>
                <li class="col-md-5 card p-3 m-1"><strong>MODALIDAD DE INGRESO:</strong> {{ $estudiante->modalidad_ingreso }}</li>
                <li class="col-md-5 card p-3 m-1"><strong>PERIODO:</strong> {{ $estudiante->periodo }}</li>
                <li class="col-md-5 card p-3 m-1 "><strong>PAIS:</strong> {{ $estudiante->pais }}</li>
                <li class="col-md-5 card p-3 m-1"><strong>TITULO DE BACHILLER:</strong> {{ $estudiante->titulo_bachiller }}</li>
            </ul>
            
            


        </div>
    </div>





</div>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop 




