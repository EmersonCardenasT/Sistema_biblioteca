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
                        <th scope="col">Nombre Autor</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($autors as $autor)
                        <tr class="">
                            <td scope="row">{{ $autor->id }}</td>
                            <td>{{ $autor->nom_autor }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#edit{{$autor->id}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{$autor->id}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('autor.info')
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    @include('autor.create')
@endsection
