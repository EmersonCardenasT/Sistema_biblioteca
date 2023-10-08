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
                        <th scope="col">Nombre Editorial</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($editorials as $editorial)
                        <tr class="">
                            <td scope="row">{{ $editorial->id }}</td>
                            <td>{{ $editorial->nom_editorial }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#edit{{$editorial->id}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{$editorial->id}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('editorial.info')
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    @include('editorial.create')
@endsection
