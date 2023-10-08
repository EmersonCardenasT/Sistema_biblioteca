<!-- Modal  EDITAR-->
<div class="modal fade" id="edit{{ $prestamo->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR PRESTAMO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('prestamos.update', $prestamo->id) }}" method="post">
                @csrf
                @method('PUT')
                {{-- <div class="modal-body">

                    <div class="mb-3">
                        <label for="" class="form-label">Fecha Prestamo</label>
                        <input type="date" class="form-control" name="fechaprestamo" id=""
                            aria-describedby="helpId" placeholder="" value="{{$prestamo->fecha_prestamo}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Fecha Devolucion</label>
                        <input type="date" class="form-control" name="fechadevolucion" id=""
                            aria-describedby="helpId" placeholder="" value="{{$prestamo->fecha_devolucion}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Estado de Prestamo</label>
                        <input type="text" class="form-control" name="estado" id=""
                            aria-describedby="helpId" placeholder="" value="{{$prestamo->estado}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Libro a prestar</label>
                        <select name="idlibro" id="" class="form-control">
                            @foreach ($libros as $libro)
                                @if ($libro->id == $prestamo->idlibro)
                                    <option value="{{ $libro->id }}" selected>{{ $libro->nom_libro }}</option>
                                @else
                                    <option value="{{ $libro->id }}">{{ $libro->nom_libro }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Selecciona alumno</label>
                        <select name="idalumno" id="" class="form-control">
                            @foreach ($alumnos as $alumno)
                                @if ($alumno->id == $prestamo->idalumno)
                                    <option value="{{ $alumno->id }}" selected>{{ $alumno->nombre.' '.$alumno->apellido }}</option>
                                @else
                                    <option value="{{ $alumno->id }}">{{ $alumno->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                </div> --}}
                <div class="modal-body">

                    
                Seguro de confirmar la acción?

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar Accion</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal  ELIMINAR-->
<div class="modal fade" id="delete{{ $prestamo->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR PRESTAMO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('prestamos.destroy', $prestamo->id) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">

                    Estas seguro de eliminar el prestamo <strong>{{$prestamo->id}}</strong> del 
                    alumno <strong>{{$prestamo->alumno->nombre.' '.$prestamo->alumno->apellido}}</strong>?

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>