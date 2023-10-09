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
        //
        $prestamos = new Prestamo();
        $prestamos->fecha_prestamo = $request->input('fechaprestamo');
        $prestamos->fecha_devolucion = $request->input('fechadevolucion');
        $prestamos->estado = $request->input('estado');
        $prestamos->idlibro = $request->input('idlibro');
        $prestamos->idalumno = $request->input('idalumno');
        $prestamos->save();
        return redirect()->back()->with('mensaje', 'Se registro de la manera correcta');
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
        //
        $prestamos = Prestamo::find($id);
        if ($prestamos) {
            if ($prestamos->estado == 'Prestamo') {
                $prestamos->estado = 'Devuelto';
                $prestamos->save();
                return redirect()->back()->with('success', 'El estado se ha actualizado correctamente.')->with('mensaje', 'Se actualizo de manera correcta');
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
