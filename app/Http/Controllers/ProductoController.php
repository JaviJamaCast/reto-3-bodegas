<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Formato;
use App\Models\Imagen;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
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
        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        $formatos = Formato::all();
        return view('productos.edit', compact(['producto', 'formatos', 'categorias']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        // Valida los datos de entrada del formulario
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'referencia' => 'required',
            'precio' => 'required|numeric',
            'formato_id' => 'required|exists:formatos,id',
            // Asumiendo que la actualización de categorías e imágenes también es requerida
            'categorias' => 'sometimes|array',
            'categorias.*' => 'exists:categorias,id',
            'imagenes' => 'sometimes|array',
            'imagenes.*' => 'image|max:10240',
            'deleteImagenes' => 'sometimes|array',
            'deleteImagenes.*' => 'exists:imagenes,id',
        ]);

        // Actualiza los detalles del producto
        $producto->update($request->all());


        if ($request->has('deleteImagenes')) {
            foreach ($request->deleteImagenes as $imagenId) {
                $imagen = Imagen::findOrFail($imagenId);
                Storage::delete($imagen->nombre); // Elimina el archivo de imagen del almacenamiento
                $imagen->delete(); // Elimina el registro de la base de datos
            }
        }

        // Maneja la actualización de imágenes asociadas al producto
        if ($request->hasFile('imagenes')) {
            // Aquí podrías eliminar las imágenes antiguas si es necesario
            // o marcar algunas para mantener basado en alguna lógica específica

            foreach ($request->file('imagenes') as $imagen) {
                $nombreImagen = $imagen->getClientOriginalName();
                $rutaImagen = $imagen->storeAs('imagenes', $nombreImagen, 'public');
                Imagen::create([
                    'producto_id' => $producto->id,
                    'nombre' => $rutaImagen,
                ]);
            }
        }

        // Actualiza las asociaciones de categorías si es necesario
        if ($request->has('categorias')) {
            $producto->categorias()->sync($request->categorias);
        }

        // Redirecciona a la vista del producto actualizado con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
