<!-- Modal  EDITAR-->
<div class="modal fade" id="edit{{ $libro->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR LIBRO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('libros.update', $libro->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="" class="form-label">Nombre Libro</label>
                        <input type="text" class="form-control" name="nombre" id=""
                            aria-describedby="helpId" placeholder="" value="{{ $libro->nom_libro }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" name="cantidad" id=""
                            aria-describedby="helpId" placeholder="" value="{{ $libro->cantidad }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Autor</label>
                        <select name="idautor" id="" class="form-control">
                            @foreach ($autores as $autor)
                                @if ($autor->id == $libro->idautor)
                                    <option value="{{ $autor->id }}" selected>{{ $autor->nom_autor }}</option>
                                @else
                                    <option value="{{ $autor->id }}">{{ $autor->nom_autor }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Editorial</label>
                        <select name="ideditorial" id="" class="form-control">
                            @foreach ($editoriales as $editorial)
                                <option value="{{ $editorial->id }}">{{ $editorial->nom_editorial }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal  EDITAR-->
<div class="modal fade" id="delete{{ $libro->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR LIBRO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('libros.destroy', $libro->id) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">

                    Estas seguro de eliminar <strong>{{$libro->nom_libro}}</strong>?

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
