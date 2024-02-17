<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Formato;
use App\Models\Imagen;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->crearDatosBasicos();
        $this->call([
            RolSeeder::class,
        ]);
        // Asegurar existencia de datos básicos

        Cliente::all()->each(function ($cliente) {
            $cliente->pedidos()->saveMany(Pedido::factory(rand(1, 5))->make())
                ->each(function ($pedido) {
                    // Asegurarse de que existan usuarios y asociarlos
                    $usuariosIds = User::inRandomOrder()->take(rand(1, 3))->pluck('id');
                    $pedido->usuarios()->attach($usuariosIds);

                    // Crear productos y asociarlos con categorías, formato e imágenes
                    $productos = Producto::factory(rand(1, 4))->make();
                    $pedido->productos()->saveMany($productos)
                        ->each(function ($producto) {
                            $categoriasIds = Categoria::inRandomOrder()->take(rand(1, 3))->pluck('id');
                            $producto->categorias()->attach($categoriasIds);

                            $formatoId = Formato::inRandomOrder()->take(1)->pluck('id')->first();
                            $producto->formato()->associate($formatoId);
                            $producto->save(); // Guardar la asociación con formato

                            Imagen::factory(rand(1, 3))->create([
                                'producto_id' => $producto->id,
                            ]);
                        });
                });
        });

    }

    protected function crearDatosBasicos()
    {


        if (User::count() < 10) {
            User::factory(10)->create();
        }

        if (Producto::count() < 10) {
            Producto::factory(10)->create();
        }

        // Asegurar que existan categorías y formatos para asociar
        if (Categoria::count() < 5) {
            Categoria::factory(5)->create();
        }

        if (Formato::count() < 3) {
            Formato::factory(3)->create();
        }
        if (Cliente::count() < 10) {
            Cliente::factory(10)->create();
        }
    }
}
