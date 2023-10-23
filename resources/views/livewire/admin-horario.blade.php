
<div>
    @if (session('info'))
        <div class="alert alert-primary" role="alert">
            <strong>¡Éxito!</strong>
            {{ session('info') }}
        </div>
    @endif


{{-- Aquí va el código restante para la tabla de compras --}} 


    {{-- Tablas --}}
    <div class="card">

        {{-- <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="buscar" class="form-control w-100"
                placeholder="Escriba un nombre ..." type="text">
        </div> --}}
        <div class="card-header">
            <a class="btn btn-info" href="{{ route('horarios.create') }}">NUEVO HORARIO</a>
        </div>

         @if ($horarios->count()) 
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th>materia_sigla</th>
                            <th>materia</th> 
                            <th>docente</th>
                            <th>horario</th>
                            
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($horarios as $horario)
                            <tr>
                                <td>
                                    {{ $horario->materia->sigla }}
                                </td>
                                
                                <td>
                                    {{ $horario->materia->nombre }}
                                </td>
                               
                               
                                <td>
                                   {{ $horario->docente->nombre}}
                                   {{ $horario->docente->paterno}}
                                   {{ $horario->docente->materno}}
                                </td>
                                <td>
                                    {{ $horario->horario }}
                                </td>
                               
                                {{-- para que el boton quede pegado a la derecha->width=10px --}}

                                <td width="10px">
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.nota_compra.edit', $horario) }}">Edit</a>
                                </td>
                                <td width="10px">
                                    <button class="btn btn-danger" type="button" onclick="confirmDelete({{ $horario->id }})">Del</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $horarios->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros ...</strong>
            </div>
        @endif 

    </div>

    {{-- <script>
        function confirmDelete(horaio_id) {
            if (confirm('¿Estás seguro/a?')) {
                @this.call('deleteCompra', nota_compra_id);
            }
        }
    </script> --}}
</div>
