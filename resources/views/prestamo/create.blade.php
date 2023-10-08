<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRAR UN NUEVO PRESTAMO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('prestamos.store') }}" method="post">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="" class="form-label">Fecha Prestamo</label>
                        <input type="date" class="form-control" name="fechaprestamo" id=""
                            aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Fecha Devolucion</label>
                        <input type="date" class="form-control" name="fechadevolucion" id=""
                            aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Estado de Prestamo</label>
                        <select name="estado" id="" class="form-control">
                            <option value="prestamo"  name="estado">Prestado</option>
                        </select>

                        {{-- <input type="text" class="form-control" name="estado" id=""
                            aria-describedby="helpId" placeholder=""> --}}

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Libro a prestar</label>
                        <select name="idlibro" id="" class="form-control">
                            @foreach ($libros as $libro)
                            <option value="{{$libro->id}}">{{$libro->nom_libro}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Selecciona alumno</label>
                        <select name="idalumno" id="" class="form-control">
                            @foreach ($alumnos as $alumno)
                            <option value="{{$alumno->id}}">{{$alumno->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
