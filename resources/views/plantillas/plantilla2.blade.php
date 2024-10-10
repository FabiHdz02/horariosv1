<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Horarios</title>
    @vite(['resources/js/app.js','resources/sass/app.scss'])
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <a class="navbar-brand" href="">TecnoBugs</a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                ></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="" aria-current="page"
                                >Inicio <span class="visually-hidden">(current)</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('alumnos.index')}}">Alumnos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('puestos.index')}}">Puestos</a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input
                            class="form-control me-sm-2"
                            type="text"
                            placeholder="Buscar"
                        />
                        <button class="btn btn-success my-2 my-sm-0" type="submit">
                            Buscar
                        </button>
                    </form>
                </div>
            </nav>
            
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            @yield("contenido2")
        </div>
    </div>
    <div class="row">
        <div class="col">
            @yield("contenido1")
        </div>
    </div>
    <div class="row">
        <div class="col">
            @yield("piepagina")
        </div>
    </div>
</div>

</body>
</html>