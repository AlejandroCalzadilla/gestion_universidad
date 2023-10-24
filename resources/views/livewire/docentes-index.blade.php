
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
        @can('Crear docentes')
            <div class="card-header">
                <a class="btn btn-secondary" href="{{ route('docentes.create') }}">NUEVO DOCENTE</a>
            </div>
        @endcan

        @if ($docentes->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>

                            {{-- en descripcion ira vehiculo con marca --}}
                            <th>ci</th>
                            <th>nombre</th>
                            <th>Apellido Paaterno</th>
                            <th>Email</th>

                            <th colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($docentes as $docente)
                            <tr>

                                <td>
                                    {{ $docente->ci }}
                                </td>
                                <td>
                                    {{ $docente->nombre}}
                                </td>

                                <td>
                                    {{ $docente->paterno }}
                                </td>
                                <td>
                                    {{ $docente->email }}
                                </td>



                                {{-- para que el boton quede pegado a la derecha->width=10px --}}
                               
                                @can('Listar docentes')
                                    <td width="10px">
                                        <a class="btn btn-primary" href="{{ route('docentes.edit', $docente) }}"><i
                                                class="fas fa-user-edit"></i></a>
                                    </td>
                                @endcan

                                @can('Listar docentes')
                                    <td width="10px">
                                        {{-- el form es necesario para cuando queremos eliminar por eso no pusimos la etiqueta <a href=""></a> --}}
                                        <form action="{{ route('docentes.destroy', $docente) }}" method="POST">
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
                {{ $docentes->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros ...</strong>
            </div>
        @endif

    </div>
</div>
