
@extends('adminlte::page')

@section('title', 'estudiante')

@section('content_header')

@stop



@section('content')    



@if ($estudiante)
<h1>Información del Estudiante</h1>

<div>
     {{-- @if ($estudiante->count())
            <div class="card-body">
                <div class="table-responsive">  
                  <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CODIGO</th>
                            <th>CI</th>
                            <th>NOMBRE</th>
                            <th>SEXO</th>
                            <th>TELEFONO</th>
                            <th>FECHA DE NACIMIENTO</th>
                            <th>MODALIDAD DE INGRESO</th>
                            <th>PERIODO</th>
                            <th>PAIS</th>
                            <th>TITULO DE BACHILLER</th>

                            <th colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{ $estudiante ->id}}</td>           
                                <td>{{ $estudiante->codigo }}</td>
                                <td>{{ $estudiante->ci }}</td>
                                <td>{{ $estudiante->nombre }}</td>
                                <td>{{ $estudiante->sexo }}</td>
                                <td>{{ $estudiante->telefono }}</td>
                                <td>{{ $estudiante->fecha_nacimiento }}</td>
                                <td>{{ $estudiante->modalidad_ingreso }}</td>
                                <td>{{ $estudiante->periodo }}</td>
                                <td>{{ $estudiante->pais }}</td>
                                <td>{{ $estudiante->titulo_bachiller }}</td>                               --}}
                            {{-- </tr>
                    </tbody>
                </table>
                </div>
            </div>

        @else
            <div class="card-body">
                <strong>No hay registros ...</strong>
            </div>
        @endif   --}}


        
    {{-- @if ($estudiante->count())
    <div class="card-body">
        <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ID: {{ $estudiante->id }}</h5>
                            <p class="card-text">CODIGO: {{ $estudiante->codigo }}</p>
                            <p class="card-text">CI: {{ $estudiante->ci }}</p>
                            <p class="card-text">NOMBRE: {{ $estudiante->nombre }}</p>
                            <p class="card-text">SEXO: {{ $estudiante->sexo }}</p>
                            <p class="card-text">TELEFONO: {{ $estudiante->telefono }}</p>
                            <p class="card-text">FECHA DE NACIMIENTO: {{ $estudiante->fecha_nacimiento }}</p>
                            <p class="card-text">MODALIDAD DE INGRESO: {{ $estudiante->modalidad_ingreso }}</p>
                            <p class="card-text">PERIODO: {{ $estudiante->periodo }}</p>
                            <p class="card-text">PAIS: {{ $estudiante->pais }}</p>
                            <p class="card-text">TITULO DE BACHILLER: {{ $estudiante->titulo_bachiller }}</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@else
    <div class="card-body">
        <strong>No hay registros ...</strong>
    </div>
@endif --}}



@if ($estudiante->count())
    <div class="card-body">
        <div class="table-responsive">
            <ul >
                <li><strong>ID:</strong> {{ $estudiante->id }}</li>
                <br>
                <li><strong>CODIGO:</strong> {{ $estudiante->codigo }}</li>
                <br>
                <li><strong>CI:</strong> {{ $estudiante->ci }}</li>
                <br>
                <li><strong>NOMBRE:</strong> {{ $estudiante->nombre }}</li>
                <br>
                <li><strong>SEXO:</strong> {{ $estudiante->sexo }}</li>
                <br>
                <li><strong>TELEFONO:</strong> {{ $estudiante->telefono }}</li>
                <br>
                <li><strong>FECHA DE NACIMIENTO:</strong> {{ $estudiante->fecha_nacimiento }}</li>
                <br>
                <li><strong>MODALIDAD DE INGRESO:</strong> {{ $estudiante->modalidad_ingreso }}</li>
                <br>
                <li><strong>PERIODO:</strong> {{ $estudiante->periodo }}</li>
                <br>
                <li><strong>PAIS:</strong> {{ $estudiante->pais }}</li>
                <br>
                <li><strong>TITULO DE BACHILLER:</strong> {{ $estudiante->titulo_bachiller }}</li>
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
<p>No se encontró información del estudiante.</p>
@endif
   



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop 




