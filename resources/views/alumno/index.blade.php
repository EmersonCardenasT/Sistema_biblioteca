@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">REGISTRO DE <strong>ALUMNOS</strong></h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
            Agregar
        </button>
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-bordered shadow-lg mt-4 mb-3">
                <thead class="bg-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnos as $alumno)
                        <tr class="">
                            <td scope="row">{{ $alumno->id }}</td>
                            <td>{{ $alumno->nombre }}</td>
                            <td>{{ $alumno->apellido }}</td>
                            <td>{{ $alumno->telefono }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#edit{{ $alumno->id }}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $alumno->id }}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('alumno.info')
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    @include('alumno.create')
@endsection
