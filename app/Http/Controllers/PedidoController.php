<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
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
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('pedidos.create', compact(['clientes', 'productos']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lang = App::getLocale();

        $successMessages = [
            'es' => 'Pedido creado correctamente!',
            'en' => 'Order created successfully!',
            'eu' => 'Eskaera behar bezala sortuta!',
        ];
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'productos' => 'required|array',
            'productos.*.id' => 'required|exists:productos,id',
            'productos.*.cantidad' => 'required|numeric|min:1'
        ]);

        $pedido = new Pedido();
        $pedido->cliente_id = $request->cliente_id;
        $pedido->fecha_pedido = now();
        $pedido->save();

        foreach ($request->productos as $producto_id => $cantidad) {
            if ($cantidad > 0) {
                $pedido->productos()->attach($producto_id, ['cantidad' => $cantidad]);
            }
        }
        return redirect()->route('pedidos.index')->with('success', $successMessages[$lang]);
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
        $lang = App::getLocale();
        $successMessages = [
            'es' => 'Pedido eliminado correctamente!',
            'en' => 'Order deleted successfully!',
            'eu' => 'Eskaera ondo ezabatu da!',
        ];

        $pedido->delete();

        return redirect()->route('pedidos.index')->with('success', $successMessages[$lang]);
    }
}
