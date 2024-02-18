<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::paginate(12);
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lang = App::getLocale();

        $successMessages = [
            'es' => 'Cliente creado correctamente!',
            'en' => 'Client created successfully!',
            'eu' => 'Bezeroa ongi sortu da!',
        ];
        // Valida los datos de entrada del formulario
        $request->validate([
            'codigo_acceso' => 'required|max:255',
            'nombre' =>  'required|max:255',
            'apellidos' => 'required|max:255',
            'telefono' => 'required|max:255',
            'direccion' => 'required|max:255',
            'email' => 'required|max:255',
            'foto_perfil' => 'image|mimes:jpeg,png,jpg,gif|max:10236',
        ]);

        if ($request->hasFile('foto_perfil')) {
            $imagen = $request->file('foto_perfil');
            $nombre_imagen = $imagen->getClientOriginalName();
            $ruta_imagen = $imagen->storeAs('perfiles', $nombre_imagen, 'public');
        }
        $request['codigo_acceso'] = Crypt::encrypt($request['codigo_acceso']);
        $clienteData = $request->all();
        $clienteData['foto_perfil'] = $ruta_imagen;
        Cliente::create($clienteData);

        return redirect()->route('clientes.index')->with('success', $successMessages[$lang]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $lang = App::getLocale();

        $successMessages = [
            'es' => 'Cliente actualizado correctamente!',
            'en' => 'Client updated successfully!',
            'eu' => 'Bezeroa behar bezala eguneratu da!',
        ];

        $request->validate([
            'nombre' =>  'required|max:255',
            'apellidos' => 'required|max:255',
            'telefono' => 'required|max:255',
            'direccion' => 'required|max:255',
            'email' => 'required|max:255',
            'foto_perfil' => 'image|mimes:jpeg,png,jpg,gif|max:10236',
        ]);


        $cliente->update($request->all());


        $ruta_imagen = $cliente->foto_perfil;

        if ($request->hasFile('foto_perfil')) {

            if ($ruta_imagen) {
                Storage::disk('public')->delete($ruta_imagen);
            }


            $imagen = $request->file('foto_perfil');
            $nombre_imagen = $imagen->getClientOriginalName();
            $ruta_imagen = $imagen->storeAs('perfiles', $nombre_imagen, 'public');
        }


        $cliente->foto_perfil = $ruta_imagen;
        $cliente->save();

        return redirect()->route('clientes.index')->with('success', $successMessages[$lang]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $lang = App::getLocale();
        $successMessages = [
            'es' => 'Cliente eliminado exitosamente!',
            'en' => "Client deleted successfully!",
            'eu' => "Bezeroa ongi ezabatu da!"
        ];
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', $successMessages[$lang]);
    }
}
