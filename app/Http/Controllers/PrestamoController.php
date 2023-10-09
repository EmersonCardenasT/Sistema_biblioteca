<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Libro;
use App\Models\Prestamo;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $prestamos = Prestamo::all();
        $libros = Libro::all();
        $alumnos = Alumno::all();
        return view('prestamo.index', compact('prestamos', 'libros', 'alumnos'));
    }

    public function pdf(){
        $prestamos = Prestamo::all();
        $pdf = Pdf::loadView('prestamo.pdf', compact('prestamos'));
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $libro = Libro::find($request->input('idlibro'));

    if ($libro && $libro->cantidad > 0) {
        // Realizar el préstamo
        $prestamo = new Prestamo();
        $prestamo->fecha_prestamo = $request->input('fechaprestamo');
        $prestamo->fecha_devolucion = $request->input('fechadevolucion');
        $prestamo->estado = 'Prestamo';
        $prestamo->idlibro = $request->input('idlibro');
        $prestamo->idalumno = $request->input('idalumno');
        $prestamo->save();

        // Reducir la cantidad de libros en 1
        $libro->cantidad -= 1;
        $libro->save();

        return redirect()->back()->with('mensaje', 'Se registró de la manera correcta.');
    } else {
        return redirect()->back()->with('error', 'No se puede prestar el libro porque no hay existencias disponibles.');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $prestamo = Prestamo::find($id);

if ($prestamo) {
    if ($prestamo->estado == 'Prestamo') {
        // Cambiar el estado a "Devuelto"
        $prestamo->estado = 'Devuelto';
        $prestamo->save();

        // Obtener el libro asociado al préstamo
        $libro = Libro::find($prestamo->idlibro);

        if ($libro) {
            // Incrementar la cantidad de libros en 1 si no supera 0
            if ($libro->cantidad >= 0) {
                $libro->cantidad += 1;
                $libro->save();
            }
        }

        return redirect()->back()->with('mensaje', 'El estado se ha actualizado correctamente.');
    } else {
        return redirect()->back()->with('error', 'El préstamo ya está marcado como devuelto.');
    }
} else {
    return redirect()->back()->with('error', 'No se encontró el registro de préstamo.');
}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $prestamos = Prestamo::find($id);
        $prestamos->delete();
        return redirect()->back()->with('mensaje', 'Registro eliminado correctamente');
    }
}
