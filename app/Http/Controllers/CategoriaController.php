<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::paginate(20);
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lang = App::getLocale();
        $successMessages = [
            'es' => '¡Categoría creada correctamente!',
            'en' => 'Category created successfully!',
            'eu' => 'Kategoria ondo sortu da!',
        ];


        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        // Crear una nueva categoría
        Categoria::create([
            'nombre' => $request->nombre,
        ]);

        // Redireccionar con un mensaje de éxito
        return redirect()->route('categorias.index')->with('success', $successMessages[$lang]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $lang = App::getLocale();
        $successMessages = [
            'es' => '¡Categoría actualizada correctamente!',
            'en' => 'Category updated successfully!',
            'eu' => 'Kategoria ondo eguneratu da!',
        ];


        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $categoria->update([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('categorias.index')->with('success', $successMessages[$lang]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {

        $lang = App::getLocale();
        $successMessages = [
            'es' => '¡Categoría eliminada correctamente!',
            'en' => 'Category deleted successfully!',
            'eu' => 'Kategoria ondo ezabatu da!',
        ];

        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', $successMessages[$lang]);
    }
}
