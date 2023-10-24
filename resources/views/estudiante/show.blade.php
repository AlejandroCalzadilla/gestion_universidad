




@extends('adminlte::page')

@section('title', 'estudiante')

@section('content_header')

@stop



@section('content')    



@if ($estudiante)
<h1>Información del Estudiante</h1>
<p>Nombre: {{ $estudiante->nombre }}</p>
<p>Edad: {{ $estudiante->edad }}</p>
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




