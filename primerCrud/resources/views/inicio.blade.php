@extends('layout/plantilla')

@section('tituloPagina', 'Crud con Laravel 8')

@section('contenido')
<div class="card">
    <h5 class="card-header">CRUD con Laravel 8 y MySQL</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <!--con esto validamos la sesion, el mensaje solo exite una vez y se pierde cuando se vuelva a refrescar-->
                @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $mensaje }}
                </div>
                @endif
                
            </div>
        </div>
        <h5 class="card-title text-center">Listado de personas</h5>
        <p>
            <a href="{{ route("personas.create") }}" class="btn btn-primary">
              <span class="fa-solid fa-user-plus"></span>  Agregar nueva persona
            </a>
        </p>
        <hr>
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach ($datos as $item)
                        <tr>
                            <td>{{ $item->paterno }}</td>
                            <td>{{ $item->materno }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->fecha_nacimiento }}</td>
                            <td>
                                <form action="{{ route("personas.edit", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fa-solid fa-user-pen"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("personas.show", $item->id) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fa-solid fa-user-xmark"></span>
                                    </button>
                               </form>
                            </td>
                        </tr>
                    @endforeach
                       
                    </tbody>
                </table>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        {{ $datos->links() }}
                    </div>

            </div>
        </p>
    </div>
</div>

@endsection