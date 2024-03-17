<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Formato;
use App\Models\Imagen;
use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $pedidos = Pedido::with('cliente')->paginate(12);
        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        $formatos = Formato::all();
        return view('productos.create', compact(['formatos', 'categorias']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $lang = App::getLocale();

        $successMessages = [
            'es' => '¡Producto creado correctamente!',
            'en' => 'Product created successfully!',
            'eu' => 'Produktua ondo sortu da!',
        ];
        // Valida los datos de entrada del formulario
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'referencia' => 'required',
            'precio' => 'required|numeric',
            'formato_id' => 'required|exists:formatos,id',
            'categorias' => 'required|array',
            'categorias.*' => 'exists:categorias,id',
            'imagenes' => 'required|array',
            'imagenes.*' => 'image|max:10240 ', // 2MB max size per image
        ]);

        // Crea un nuevo producto
        $producto = Producto::create($request->all());

        // Guarda las imágenes asociadas al producto
        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
                $nombreImagen = $imagen->getClientOriginalName();
                $rutaImagen = $imagen->storeAs('imagenes', $nombreImagen, 'public');
                Imagen::create([
                    'producto_id' => $producto->id,
                    'nombre' => $rutaImagen,
                ]);
            }
        }

        // Asocia las categorías al producto
        if ($request->has('categorias')) {
            $producto->categorias()->attach($request->categorias);
        }

        // Redirecciona a la página de inicio o a la vista de detalle del producto creado
        return redirect()->route('productos.index')->with('success', $successMessages[$lang]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        return view('pedidos.show', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
