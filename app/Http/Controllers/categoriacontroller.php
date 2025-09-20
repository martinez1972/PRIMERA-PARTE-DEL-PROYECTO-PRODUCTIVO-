<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecategoriaRequest;
use App\Models\caracteristica;
use App\Models\categoria;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoriaController extends Controller
{
    
    public function index()
    {
        $categorias = categoria::with('caracteristica')->get();
        dd($categorias);
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
       //dd($request);  
      try {
        DB::beginTransaction();
        $caracteristica = Caracteristica::create($request->validated());
        $caracteristica->categoria()->create([
            'caracteristica_id' =>$caracteristica->id 
        ]);
        DB::commit();
      } catch (Exception $e) {
        DB::rollback();
      }


      return redirect()->route('categorias.index')->with('succes','categoria registrada');
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
