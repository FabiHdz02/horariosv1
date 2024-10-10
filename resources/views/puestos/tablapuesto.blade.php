    <div class="mb-3">
        <a href="{{ route('puestos.create') }}" class="btn btn-outline-secondary">Registrar Puesto</a>
    </div>
    
    <div class="table-responsive-md">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col" colspan="3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($puestos as $puesto)
                <tr>
                    <td scope="row">{{ $puesto->idpuesto }}</td>
                    <td>{{ $puesto->nombre }}</td>
                    <td>{{ $puesto->tipo }}</td>
                    <td><a href="{{ route('puestos.edit', $puesto->id) }}" class="btn btn-outline-primary">Editar</a></td>
                    <td><a href="{{ route('puestos.show', $puesto->id) }}" class="btn btn-outline-danger">Eliminar</a></td>
                    <td><a href="{{ route('puestos.show', $puesto->id) }}" class="btn btn-outline-info">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $puestos->links() }}
    </div>    