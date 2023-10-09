<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .cabecera{
            background-color: rgb(26, 83, 242);
            color: white;
        }
        h1{
            color: red;
        }
    </style>

</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-album" viewBox="0 0 16 16">
        <path d="M5.5 4a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5h-5zm1 7a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3z"/>
        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
      </svg>
    <br>
    <h1 class="text-center">HISTORIAL DE PRESTAMOS</h1>
    <br>
    <hr>
    <table class="table" style="text-align: center; font-size:20px">
        <thead class="cabecera">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Fecha prestamo</th>
                <th scope="col">Fecha devolución</th>
                <th scope="col">estado</th>
                <th scope="col">Libro</th>
                <th scope="col">Alumno</th>
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
                </tr>
                @include('prestamo.info')
            @endforeach
        </tbody>
    </table>
    <hr>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>