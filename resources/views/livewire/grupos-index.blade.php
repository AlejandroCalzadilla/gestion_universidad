<div class="card">

    {{-- <div class="card-header">
        <input wire:keydown="limpiar_page" wire:model="buscar" class="form-control w-100"
            placeholder="Escriba un nombre ..." type="text">
    </div> --}}
    <div class="card-header">
        <a class="btn btn-info" href="{{ route('grupos.create') }}">nuevo grupo</a>
    </div>

    @if ($grupos->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                                      
                        <th>id</th>
                        <th>nombre</th>

                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grupos as $grupo)
                        <tr>

                            <td>
                                {{ $grupo->id }}
                            </td>
                            <td>
                                {{ $grupo->nombre }}
                            </td>
                           
                            {{-- para que el boton quede pegado a la derecha->width=10px --}}

                            @can('Editar grupos')
                            <td width="10px">
                                <a class="btn btn-primary"" href="{{ route('grupos.edit', $grupo) }}"><i
                                        class="fas fa-user-edit"></i></a>
                            </td>
                           @endcan
                            
                           @can('Eliminar grupos')
                           <td width="10px">
                               {{-- el form es necesario para cuando queremos eliminar por eso no pusimos la etiqueta <a href=""></a> --}}
                               <form action="{{ route('grupos.destroy', $grupo) }}" method="POST">
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
{{-- 
        <div class="card-footer">
            {{ $grupos->links() }}
        </div> --}}
    @else
        <div class="card-body">
            <strong>No hay registros ...</strong>
        </div>
    @endif

</div>