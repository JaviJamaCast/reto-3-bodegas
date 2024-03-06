<?php

namespace App\Http\Controllers;

use App\Models\Formato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FormatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formatos = Formato::paginate(18);
        return view('formatos.index', compact('formatos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formatos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lang = App::getLocale();
        $successMessages = [
            'es' => 'Formato creado correctamente!',
            'en' => 'Format created successfully!',
            'eu' => 'Formatua ondo sortu da!',
        ];


        $request->validate([
            'formato' => 'required|string|max:255',
        ]);

        // Crear una nueva categoría
        Formato::create([
            'formato' => $request->formato,
        ]);

        // Redireccionar con un mensaje de éxito
        return redirect()->route('formatos.index')->with('success', $successMessages[$lang]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Formato $formato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formato $formato)
    {
        return view('formatos.edit', compact('formato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formato $formato)
    {
        $lang = App::getLocale();
        $successMessages = [
            'es' => 'Formato actualizado correctamente!',
            'en' => 'Format updated successfully!',
            'eu' => 'Formatua ondo eguneratu da!',
        ];


        $request->validate([
            'formato' => 'required|string|max:255',
        ]);

        $formato->update([
            'formato' => $request->formato,
        ]);

        return redirect()->route('formatos.index')->with('success', $successMessages[$lang]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formato $formato)
    {
        $lang = App::getLocale();
        $successMessages = [
            'es' => 'Formato eliminado correctamente!',
            'en' => 'Format deleted successfully!',
            'eu' => 'Formatua  ondo ezabatu da!',
        ];

        $formato->delete();

        return redirect()->route('formatos.index')->with('success', $successMessages[$lang]);
    }
}
