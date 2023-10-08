@extends('layouts.app')

@section('content')
    <div class="container">
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
                        <th scope="col">Nombre Libro</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Editorial</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($libros as $libro)
                        <tr class="">
                            <td scope="row">{{ $libro->id }}</td>
                            <td>{{ $libro->nom_libro }}</td>
                            <td>{{ $libro->cantidad }}</td>
                            <td>{{ $libro->Autor->nom_autor }}</td>
                            <td>{{ $libro->Editorial->nom_editorial }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#edit{{ $libro->id }}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $libro->id }}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('libro.info')
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    @include('libro.create')
@endsection
