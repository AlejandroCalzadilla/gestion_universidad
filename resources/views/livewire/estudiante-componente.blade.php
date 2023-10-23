
<div>

   
    <div class="card">
        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="buscar" class="form-control w-100"
                placeholder="Escriba un nombre ..." type="text">
        </div>
    
    
        @if (session('info'))
            <div class="alert alert-primary" role="alert">
                <strong>¡Éxito!</strong>
                {{ session('info') }}
            </div>
        @endif

        {{-- <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="buscar" class="form-control w-100"
                placeholder="Escriba un nombre ..." type="text">
        </div> --}}
        @can('Crear almacen')
            <div class="card-header">
                <a class="btn btn-secondary" href="{{ route('estudiante.create') }}">NUEVO ESTUDIANTE</a>
            </div>
        @endcan

        @if ($estudiante->count())
            <div class="card-body">
                <div class="table-responsive">  
                  <table class="table table-striped">
                    <thead>
                        <tr>

                            {{-- en descripcion ira vehiculo con marca --}}
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
                        @foreach ($estudiante as $estudiantes)
                            <tr>

                                <td>{{ $estudiantes -> id}}</td>           
                                <td>{{ $estudiantes-> codigo }}</td>
                                <td>{{ $estudiantes-> ci }}</td>
                                <td>{{ $estudiantes-> nombre }}</td>
                                <td>{{ $estudiantes-> sexo }}</td>
                                <td>{{ $estudiantes-> telefono }}</td>
                                <td>{{ $estudiantes-> fecha_nacimiento }}</td>
                                <td>{{ $estudiantes-> modalidad_ingreso }}</td>
                                <td>{{ $estudiantes-> periodo }}</td>
                                <td>{{ $estudiantes-> pais }}</td>
                                <td>{{ $estudiantes-> titulo_bachiller  }}</td>



                                {{-- para que el boton quede pegado a la derecha->width=10px --}}
                               
                                 @can('Editar almacen')
                                    <td width="10px">
                                        <a class="btn btn-primary" href="{{ route('estudiante.edit', $estudiantes) }}"><i
                                                class="fas fa-user-edit"></i></a>
                                    </td>
                                @endcan

                                @can('Eliminar almacen')
                                    <td width="10px">
                                        <!-el form es necesario para cuando queremos eliminar por eso no pusimos
                                        la etiqueta --> 
                                             <a href=""></a> 
                                        <form action="{{ route('estudiante.destroy', $estudiantes) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" type="submit"><i
                                                    class="fas fa-user-minus"></i></button>
                                        </form>
                                    </td>
                                @endcan 

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>

            <div class="card-footer">
                {{ $estudiante->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros ...</strong>
            </div>
        @endif

    </div>
</div>
