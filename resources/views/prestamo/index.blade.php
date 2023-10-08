@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
    <div class="container">
        <!-- Button trigger modal -->
        <h1 class="text-center">Registro de prestamos de la biblioteca <br> <strong>Emanuel</strong></h1>
        @if ($mensaje = Session::get('mensaje'))
            <script>
                Swal.fire(
                    'Exito!',
                    '{{ $mensaje }}',
                    'success'
                )
            </script>
        @endif

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
            Registrar un nuevo prestamo
        </button>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-bordered shadow-lg mt-4 mb-3" style="width:100%" id="articulos">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fecha prestamo</th>
                        <th scope="col">Fecha devolución</th>
                        <th scope="col">estado</th>
                        <th scope="col">Libro</th>
                        <th scope="col">Alumno</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prestamos as $prestamo)
                        <tr class="">
                            <td scope="row">{{ $prestamo->id }}</td>
                            <td>{{ $prestamo->fecha_prestamo }}</td>
                            <td>{{ $prestamo->fecha_devolucion }}</td>
                            <td  class="{{ $prestamo->estado === 'prestamo' ? 'bg-info' : ($prestamo->estado === 'devuelto' ? 'bg-primary' : '') }}">{{ $prestamo->estado }}</td>
                            <td>{{ $prestamo->libro->nom_libro }}</td>
                            <td>{{ $prestamo->alumno->nombre . ' ' . $prestamo->alumno->apellido }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#edit{{ $prestamo->id }}">
                                    Marcar como devuelto
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $prestamo->id }}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('prestamo.info')
                    @endforeach
                </tbody>
            </table>
        @section('js')
            <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
            <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

            <script>
                // new DataTable('#articulos');
                $(document).ready(function() {
                    $('#articulos').DataTable({
                        "lengthMenu": [
                            [10, 15, 50, -1],
                            [10, 15, 50, "All"]
                        ],
                        language: {
                            info: 'MOSTRANDO REGISTROS DE _PAGE_ DE _PAGES_',
                            infoEmpty: 'No records available',
                            infoFiltered: '(filtered from _MAX_ total records)',
                            lengthMenu: 'MOSTRAR _MENU_ Registros',
                            zeroRecords: 'Nothing found - sorry',
                            search: 'BUSCAR'
                        }
                    });
                })
            </script>
        @endsection
    </div>

</div>
@include('prestamo.create')
@endsection
