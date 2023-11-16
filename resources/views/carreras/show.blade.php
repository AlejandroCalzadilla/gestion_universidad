@extends('adminlte::page')

@section('title', 'Carreras')

@section('content_header')
    <h1>Carrera</h1>
    <h2>{{ $carrera->nombre }}</h2>
@stop

@section('content')    


<div class="card">
  

   
    @can('Crear carreras')
    <div class="card-header ">            
     <a class="btn bg-gradient-primary" href="{{ route('carrera.generarpdf',$carrera) }}">generarpdf</a> 
    </div>
  
        @endcan
     
  
    {{-- <ul>
        @foreach ($carrera->materias as $materia)
            <li>{{ $materia->nombre }} (Semestre: {{ $materia->pivot->semestre }}, Crédito: {{ $materia->pivot->credito }})</li>
        @endforeach
    </ul> --}}
    <h2>Materias</h2>
    @if ($carrera->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="bg-primary">
                        <tr>

                            {{-- en descripcion ira vehiculo con marca --}}
                            <th>sigla</th>
                            <th>nombre</th>
                            <th>semestre</th>
                            <th>creditos</th>

                            <th></th>
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materias as $materia)
                            <tr>
                                <td>
                                    {{ $materia->sigla }}
                                </td>  
                                <td>
                                    {{ $materia->nombre }}
                                </td>
                                <td>
                                    {{ $materia->semestre }}
                                </td>
                                <td>
                                    {{ $materia->credito }}
                                </td>
                               

                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>  
            @else
                <div class="card-body">
                    <strong>No hay registros ...</strong>
                </div>
            @endif
        
 
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop