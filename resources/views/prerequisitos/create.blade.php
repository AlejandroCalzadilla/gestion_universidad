@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h1>crear prerequisitos</h1>
@stop

@section('content')    
    
<div class="card">
   <h3>{{$materia->nombre}}</h3>
</div>
  
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'prerequisitos.store']) !!}
        
        <div class="row">
           

                 <div class="form-group">
                    <label for="carrera_id">Materia</label>
                    <select name="carrera_id"  class="form-control">
                        <option value="">seleccione una carrera</option> 
                        @foreach ($pres as $pre)
                            <option value="{{ $pre->id }}">{{ $pre->nombre }}</option>
                        @endforeach
                    </select>
                </div> 
                 


            </div>

           
        


        {!! Form::submit('Crear Prerequisito', ['class' => 'btn btn-primary mt-2']) !!}

        {!! Form::close() !!}
    </div>
</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop