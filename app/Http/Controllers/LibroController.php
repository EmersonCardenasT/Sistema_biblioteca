<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Editorial;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $libros = Libro::all();
        $autores = Autor::all();
        $editoriales = Editorial::all();
        return view('libro.index', compact('libros', 'autores', 'editoriales'));
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
        $libros = new Libro;
        $libros->nom_libro = $request->input('nombre');
        $libros->cantidad = $request->input('cantidad');
        $libros->idautor = $request->input('idautor');
        $libros->ideditorial = $request->input('ideditorial');
        $libros->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
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
        $libros = Libro::find($id);
        $libros->nom_libro = $request->input('nombre');
        $libros->cantidad = $request->input('cantidad');
        $libros->idautor = $request->input('idautor');
        $libros->ideditorial = $request->input('ideditorial');
        $libros->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $libros = Libro::find($id);
        $libros->delete();
        return redirect()->back();
    }
}
