<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $editorials = Editorial::all();
        return view('editorial.index', compact('editorials'));
        
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
        $editorials =  new Editorial();
        $editorials->nom_editorial = $request->input('nombre');
        $editorials->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Editorial $editorial)
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
        $editorials =  Editorial::find($id);
        $editorials->nom_editorial = $request->input('nombre');
        $editorials->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $editorials =  Editorial::find($id);
        $editorials->delete();
        return redirect()->back();
    }
}
