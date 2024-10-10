@if(session('mensaje'))
    <p>{{ session('mensaje') }}</p>
@endif

    <div class="mb-3">
        <a href="{{ route('alumnos.create') }}" class="btn btn-outline-secondary">Registrar Alumno</a>
    </div>
    
    <div class="table-responsive-md">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Correo Electrónico</th>
                    <th scope="col" colspan="3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                <tr>
                    <td scope="row">{{ $alumno->id }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellidop }}</td>
                    <td>{{ $alumno->email }}</td>
                    <td><a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-outline-primary">Editar</a></td>
                    <td><a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-outline-danger">Eliminar</a></td>
                    <td><a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-outline-info">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $alumnos->links() }}
    </div>    