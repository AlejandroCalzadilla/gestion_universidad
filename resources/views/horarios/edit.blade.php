@extends('adminlte::page')

@section('title', 'estudiante')

@section('content_header')
    <h1>Lista de Horario</h1>
@stop

@section('content')    
    @livewire('edithorario', ['horario' => $horario])
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop 