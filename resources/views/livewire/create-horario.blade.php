<div class="card">
    <div class="card-body">
        <form wire:submit.prevent="save">
            <div class="row">
                <div class="col-md-6">
                   
{{-- 
                    <div class="form-group">
                        <label for="horario">Horario </label>
                        <input type="text" class="form-control @error('horario') is-invalid @enderror" placeholder=" el texto  puede ser válido en los siguientes formatos:

                        [Día de la semana] [Hora de inicio]-[Hora de finalización]
                        [Día de la semana] [Hora de inicio]-[Hora de finalización] [Número de teléfono]-[modulo-aula]
                         ejemplos Lu 18:15-19:45
                         Lu 18:15-19:45 236-32
                         Lu 18:15-19:45 236-32 |Mi 18:15-19:45 236-41
                         nota si debe escribir con espacios 
                        "
                         wire:model="hoario">
                        @error('horario')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> --}}
                       

                    <div class="form-group">
                        <label for="horario">Horario </label>
                        <input type="text" class="form-control @error('horario') is-invalid @enderror" placeholder=" introdusca el horario 
                        "
                        wire:model="horario" >
                        @error('horario')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <p>
                        formato de horario:lu-18:15-19:45-235-41  o lu-18:15-19:45-235-41-mi-18:15-19:45-245-41
                    </p> 



                    <div class="form-group">
                        <label for="carrera_id">Carrera: </label>
                        <select class="form-control @error('carrera_id') is-invalid @enderror" wire:model="carrera_id">
                            <option value="">Seleccione una carrera...</option>
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

                   <div class="col-md-6">
                    
                    <div class="form-group">
                        <label for="cupos">Cupos </label>
                        <input type="number" class="form-control @error('cupos') is-invalid @enderror" placeholder="ingrese los cupos..." wire:model="cupos" >
                        @error('cupos')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

                      <div class="form-group">
                        <label for="materia_id">Materia: </label>
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
                  

                    {{-- <div class="form-group">
                        <label for="materia_id">Materia:</label>
                        <select class="form-control @error('materia_id') is-invalid @enderror" wire:model="materia_id">
                            <option value="">Seleccione una materia...</option>
                            @foreach($materias as $materia)
                                @if(in_array($materia->id, $materiasCarrera))
                                    <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('materia_id')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        </div>
                        @enderror
                    </div> --}}
                  
 

                    <div class="form-group">
                        <label for="docente_id">Docente: </label>
                        <select class="form-control @error('docente_id') is-invalid @enderror" wire:model="docente_id" >
                            <option value="">Seleccione un Docente...</option>
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
            </div>

            <button type="submit" class="btn btn-primary mt-2">Crear Horario</button>
        </form>
    </div>
</div>
