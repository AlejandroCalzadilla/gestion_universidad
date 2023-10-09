
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
             <a class="btn btn-secondary" href="{{ route('carreras.create') }}">NUEVA CARRERA</a> 
            </div>
        @endcan

        @if ($carreras->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>

                            {{-- en descripcion ira vehiculo con marca --}}
                            <th>nombre</th>
                            <th>facultad</th>
                           

                            <th colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carreras as $carrera)
                            <tr>

                                <td>
                                    {{ $carrera->nombre }}
                                </td>
                                <td>
                                    {{ $carrera->facultad}}
                                </td>

                                



                                {{-- para que el boton quede pegado a la derecha->width=10px --}}
                                @can('Editar almacen')
                                    <td width="10px">
                                        <a class="btn btn-info"" href="{{ route('carreras.show', $carrera) }}"><i
                                                class="fas fa-user-edit"></i></a>
                                    </td>
                                @endcan
                                @can('Editar almacen')
                                    <td width="10px">
                                        <a class="btn btn-primary" href="{{ route('carreras.edit', $carrera) }}"><i
                                                class="fas fa-user-edit"></i></a>
                                    </td>
                                @endcan


                                @can('Eliminar almacen')
                                    <td width="10px">
                                        {{-- el form es necesario para cuando queremos eliminar por eso no pusimos la etiqueta <a href=""></a> --}}
                                        <form action="{{ route('carreras.destroy', $carrera) }}" method="POST">
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

            <div class="card-footer">
                {{ $carreras->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros ...</strong>
            </div>
        @endif

    </div>
</div>
