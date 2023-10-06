@extends('adminlte::page')

@section('title', 'Docentes')

@section('content_header')
    <h1>Lista de Docentes</h1>
@stop

@section('content')    
    @livewire('docentes-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop