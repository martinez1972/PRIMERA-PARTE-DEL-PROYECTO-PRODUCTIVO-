<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecategoriaRequest;
use Illuminate\Http\Request;

class categoriacontroller extends Controller
{
    
    public function index()
    {
        return view('categorias.index');
    }


    public function create()
    {
      return view('categorias.create');
    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecategoriaRequest $request)
    {
     dd($request);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
