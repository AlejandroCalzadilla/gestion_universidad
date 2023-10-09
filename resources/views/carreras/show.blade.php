@extends('adminlte::page')

@section('title', 'Carreras')

@section('content_header')
    <h1>Carrera</h1>
@stop

@section('content')    
<div class="card">
 
    <h2>{{ $carrera->nombre }}</h2>
      <br>
 
    
    {{-- <ul>
        @foreach ($carrera->materias as $materia)
            <li>{{ $materia->nombre }} (Semestre: {{ $materia->pivot->semestre }}, Crédito: {{ $materia->pivot->credito }})</li>
        @endforeach
    </ul> --}}
    <h2>Materias</h2>
    @if ($carrera->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="table-info">
                        <tr>

                            {{-- en descripcion ira vehiculo con marca --}}
                            <th>nombre</th>
                            <th>semestre</th>
                            <th>creditos</th>
                           
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carrera->materias as $materia)
                            <tr>

                                <td>
                                    {{ $materia->nombre }}
                                </td>
                                <td>
                                    {{ $materia->pivot->semestre }}
                                </td>
                                <td>
                                    {{ $materia->pivot->credito }}
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