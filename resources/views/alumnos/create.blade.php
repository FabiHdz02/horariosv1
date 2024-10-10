@extends("plantillas/plantilla2")

@section("contenido1")
    @include("alumnos/tablahtml")
@endsection

@section("contenido2")

<form action="{{route('alumnos.store')}}" method="POST">
  @csrf
  <h1>Registrando Alumno</h1>
    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre">
      </div>
    </div>
    <div class="row mb-3">
        <label for="apellidop" class="col-sm-3 col-form-label">Apellido Paterno: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="apellidop" name="apellidop">
        </div>
    </div>
    <div class="row mb-3">
        <label for="email" class="col-sm-3 col-form-label">Email: </label>
        <div class="col-sm-9">
          <input type="email" class="form-control" id="email" name="email">
        </div>
    </div>
   
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <button type="reset" class="btn btn-secondary">Limpiar</button>
  </div>
</form> 

@endsection

