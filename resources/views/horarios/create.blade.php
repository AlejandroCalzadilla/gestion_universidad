@extends('adminlte::page')

@section('title', 'estudiante')

@section('content_header')
    <h1>Crear  Horario</h1>
@stop

@section('content')    
    @livewire('create-horario')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop 