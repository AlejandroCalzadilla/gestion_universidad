@extends('adminlte::page')

@section('title', 'Carreras')

@section('content_header')
    <h1>Lista de Carreras</h1>
@stop

@section('content')    
    @livewire('carrera-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop