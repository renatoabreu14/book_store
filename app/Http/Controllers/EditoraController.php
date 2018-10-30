<?php

namespace App\Http\Controllers;

use App\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoras = Editora::paginate();
        return view('admin.editora.index', compact('editoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.editora.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Editora::create($request->all());
        return response()->redirectToRoute('editora.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Editora  $editora
     * @return \Illuminate\Http\Response
     */
    public function show(Editora $editora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Editora  $editora
     * @return \Illuminate\Http\Response
     */
    public function edit(Editora $editora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Editora  $editora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editora $editora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Editora  $editora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editora $editora)
    {
        //
    }
}
