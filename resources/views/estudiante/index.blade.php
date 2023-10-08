{{-- @extends('adminlte::page')

@section('title', 'Estudiantes')

@section('content_header')
    <h1>Lista de Estudiantes</h1>
@stop

@section('content')    

<div class="container">

    @if (Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{Session::get('mensaje')}}
            <button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
    	    <span aria-hidden="true">
                &times;
            </span>
            </button>
        </div>
    @endif

    <a href="{{url('estudiante/create')}}" 
        class="btn btn-success">
        CREAR ESTUDIANTE
    </a> 
    <a class="btn btn-primary" href="{{url('dashboard/')}}">
        INICIO
    </a>
<br>
<br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                            <th>ID</th>
                            <th>CODIGO</th>
                            <th>CI</th>
                            <th>NOMBRE</th>
                            <th>SEXO</th>
                            <th>TELEFONO</th>
                            <th>FECHA DE NACIMIENTO</th>
                            <th>PAIS</th>
                            <th>MODALIDAD DE INGRESO</th>
                            <th>PERIODO</th>
                            <th>TITULO DE BACHILLER</th>
                            <th>CORREO</th>
                        
            </tr>
        </thead>

        <tbody>
            @foreach ($estudiantes as $estudiante)
            <tr>
                <td>{{ $estudiante -> id}}</td>           
                <td>{{ $estudiante-> codigo }}</td>
                <td>{{ $estudiante-> ci }}</td>
                <td>{{ $estudiante-> nombre }}</td>
                <td>{{ $estudiante-> sexo }}</td>
                <td>{{ $estudiante-> telefono }}</td>
                <td>{{ $estudiante-> fecha_nacimiento }}</td>
                <td>{{ $estudiante-> modalidad_ingreso }}</td>
                <td>{{ $estudiante-> periodo }}</td>
                <td>{{ $estudiante-> pais }}</td>
                <td>{{ $estudiante-> titulo_bachiller  }}</td>
                <td>{{ $estudiante-> email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}



 

@extends('adminlte::page')

@section('title', 'estudiante')

@section('content_header')
    <h1>Lista de Estudiantes</h1>
@stop

@section('content')    
    @livewire('estudiante-componente')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop 