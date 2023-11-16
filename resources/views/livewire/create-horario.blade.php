<div class="card">
    <div class="card-body">
         <form wire:submit.prevent="save">
            <div class="row">
                <div class="col-md-6">
                   

                       

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
                    <div class="card-body bg-blue  rounded">
                    <p class="text-white">
                        formato de horario:lu-18:15-19:45-235-41 <br> dosletras_dia-horainicio-horafin-instalacion-aula
                        <br> o lu-18:15-19:45-235-41-mi-18:15-19:45-245-41
                    </p> 
                    </div>


                     {{-- <div class="form-group">
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
                      --}}

                   

                      <style>
                           .form-group2{
                            
                              margin: 10px;
                           }
                           .carrera{
                              height:40px;
                              width:300px; 
                           }
                      </style>


                      <div class="form-group2 ">
                        <label  for="carrera">Selecciona una carrera:</label>
                        <select class="carrera"   wire:model="carrera_id">
                            <option  value="">Selecciona una carrera</option>
                            @foreach ($carreras as $carrera)
                                
                            <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                            @endforeach
                        </select>
                      </div> 
                       <div class="form-group">

                        @if ($carrera_id)
                            <label for="materia">Selecciona materias:</label>
                            <select class="form-control"  wire:model="materia_id">
                                <option value="">Selecciona una materia</option>
                                @foreach ($materias as $materia)
                                    <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                @endforeach
                            </select>
                        @endif
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

                    <div class="form-group">
                        <label for="grupo_id">GRUPO: </label>
                        <select class="form-control @error('grupo_id') is-invalid @enderror" wire:model="grupo_id" >
                            <option value="">Seleccione un Docente...</option>
                            @foreach($grupos as $grupo)
                                <option value="{{ $grupo->id }}">{{ $grupo->nombre }}</option>
                            @endforeach
                        </select>
                        @error('grupo_id')
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
