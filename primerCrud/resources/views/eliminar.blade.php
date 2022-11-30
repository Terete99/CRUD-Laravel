@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
<h5 class="card-header">Eliminar nueva persona</h5>
    <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                ¿Quieres eliminar éste registro?

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $personas->paterno }}</td>
                            <td>{{ $personas->materno }}</td>
                            <td>{{ $personas->nombre }}</td>
                            <td>{{ $personas->fecha_nacimiento }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('personas.index') }}" class="btn btn-info">
                        <i class="fa-solid fa-arrow-left"></i> Atrás
                    </a>
                    <button class="btn btn-danger">
                        <span class="fa-solid fa-user-xmark"></span> Eliminar 
                    </button>
                </form>
        </p>
        
    </div>
  </div>
@endsection