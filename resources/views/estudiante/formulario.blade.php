<h1>{{$modo}} Estudiante</h1>
<div style="text-align: center">
    <a class="btn btn-primary" href="{{url('estudiante/')}}">
        INICIO
    </a>
</div>


@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="id">ID</label>
    <input class="form-control" type="text" name="id"
           value="{{isset($estudiante->id)?
           $estudiante->id:
           old('id')}}" id="id">
</div>

<div class="form-group">
    <label for="codigo">REGISTRO</label>
    <input class="form-control" type="text" name="codigo"
           value="{{isset($estudiante->codigo)?
           $estudiante->codigo:
           old('codigo')}}" id="codigo">
</div>

<div class="form-group">
    <label for="ci">CEDULA DE IDENTIDAD</label>
    <input class="form-control" type="text" name="ci"
           value="{{isset($estudiante->ci)?
           $estudiante->ci:
           old('ci')}}" id="ci">
</div>

 <div class="form-group">
    <label for="nombre">NOMBRE</label>
    <input class="form-control" type="text" name="nombre"
           value="{{isset($estudiante->nombre)?
           $estudiante->nombre:
           old('nombre')}}" id="nombre">
</div>


<div class="form-group">
    <label for="sexo">SEXO</label>
    <input class="form-control" type="text" name="sexo" 
        value="{{isset($estudiante->sexo)?
        $estudiante->sexo:
        old('sexo')}}" id="sexo">
</div>
<div class="form-group">
    <label for="telefono">TELEFONO</label>
    <input class="form-control" type="text" name="telefono" 
        value="{{isset($estudiante->telefono)?
        $estudiante->telefono:
        old('telefono')}}" id="telefono">
</div>

<div class="form-group">
    <label for="fecha_nacimiento">FECHA DE NACIMIENTO</label>
    <input class="form-control" type="text" name="fecha_nacimiento" 
        value="{{isset($estudiante->fecha_nacimiento)?
        $estudiante->fecha_nacimiento:
        old('fecha_nacimiento')}}" id="fecha_nacimiento">
</div>

<div class="form-group">
    <label for="pais">PAIS</label>
    <input class="form-control" type="text" name="pais" 
        value="{{isset($estudiante->pais)?
        $estudiante->pais:
        old('pais')}}" id="pais">
</div>

<div class="form-group">
    <label for="modalidad_ingreso">MODDALIDAD DE INGRESO</label>
    <input class="form-control" type="text" name="modalidad_ingreso" 
        value="{{isset($estudiante->modalidad_ingreso)?
        $estudiante->modalidad_ingreso:
        old('modalidad_ingreso')}}" id="modalidad_ingreso">
</div>

<div class="form-group">
    <label for="periodo">PERIODO</label>
    <input class="form-control" type="text" name="periodo" 
        value="{{isset($estudiante->periodo)?
        $estudiante->periodo:
        old('periodo')}}" id="periodo">
</div>

<div class="form-group">
    <label for="titulo_bachiller">TITULO DE BACHILLER</label>
    <input class="form-control" type="text" name="titulo_bachiller" 
        value="{{isset($estudiante->titulo_bachiller)?
        $estudiante->titulo_bachiller:
        old('titulo_bachiller')}}" id="titulo_bachiller">
</div>

<div class="form-group">
    <label for="email">CORREO ELECTRONICO</label>
    <input class="form-control" type="text" name="email" 
        value="{{isset($estudiante->email)?
        $estudiante->email:
        old('email')}}" id="email">
</div>
    <input class="btn btn-success" type="submit" value="{{$modo}} Datos">

    <br>