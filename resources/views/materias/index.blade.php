@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h1>Lista de Materias</h1>
@stop

@section('content')    
    @livewire('materia-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop