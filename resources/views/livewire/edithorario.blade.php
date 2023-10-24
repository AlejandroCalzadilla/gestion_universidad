<div class="card">
    <div class="card-body">
        <form wire:submit.prevent="save">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cupos">Cupos: </label>
                        <input type="number" class="form-control @error('cupo') is-invalid @enderror" placeholder="introdusca los cupos..." wire:model="cupos">
                        @error('cupos')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                   

                    <div class="form-group">
                        <label for="docente_id">Docente: </label>
                        <select class="form-control @error('docente_id') is-invalid @enderror" wire:model="docente_id">
                            <option value="">Seleccione un docente...</option>
                            @foreach($docentes as $docente)
                                <option value="{{ $docente->id }}">{{ $docente->nombre }}</option>
                            @endforeach
                        </select>
                        @error('docente_id')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

               

                    <div class="form-group">
                        <label for="materia_id">MATERIA: </label>
                        <select class="form-control @error('materia_id') is-invalid @enderror" wire:model="materia_id">
                            <option value="">Seleccione un materia...</option>
                            @foreach($materias as $materia)
                                <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                            @endforeach
                        </select>
                        @error('materia_id')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="carrera_id">Carrera: </label>
                        <select class="form-control @error('carrera_id') is-invalid @enderror" wire:model="carrera_id" ">
                            <option value="">Seleccione un carrera...</option>
                            @foreach($carreras as $carrera)
                                <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                            @endforeach
                        </select>
                        @error('carrera_id')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            
            <button type="submit" class="btn btn-primary mt-2">Actualizar Horario</button>
        </form>
    </div>
</div>
