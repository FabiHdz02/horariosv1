@extends("plantillas/plantilla2")

@section("contenido1")
    @include("puestos/tablapuesto")
@endsection

@section("contenido2")

<form action="{{route('puestos.destroy',$puesto)}}" method="POST">
  @csrf
  <h1>Perfil del Puesto</h1>
    <div class="row mb-3">
      <label for="idpuesto" class="col-sm-3 col-form-label">Id Puesto: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idpuesto" name="idpuesto" disabled value="{{$puesto->idpuesto}}">
      </div>
    </div>
    <div class="row mb-3">
        <label for="nombre" class="col-sm-3 col-form-label">Nombre: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nombre" name="nombre" disabled value="{{$puesto->nombre}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="tipo" class="col-sm-3 col-form-label">Tipo: </label>
        <div class="col-sm-9">
          <input type="tipo" class="form-control" id="tipo" name="tipo" disabled value="{{$puesto->tipo}}">
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-danger">Eliminar</button>
        <a href="{{ route("puestos.index") }}" class="btn btn-primary">↰ Regresar</a>
    </div>
</form> 

@endsection