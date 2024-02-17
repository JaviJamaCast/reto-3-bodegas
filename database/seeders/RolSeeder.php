<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol_responsable = Role::create(['name' => 'responsable']);
        $rol_comercial = Role::create(['name' => 'comercial']);
        $rol_administrativo = Role::create(['name' => 'administrativo']);


        $permission_create_rol = Permission::create(['name' => 'create roles']);
        $permission_read_rol = Permission::create(['name' => 'read roles']);
        $permission_update_rol = Permission::create(['name' => 'update roles']);
        $permission_delete_rol = Permission::create(['name' => 'delete roles']);

        $permission_create_pedidos = Permission::create(['name' => 'create pedidos']);
        $permission_read_pedidos = Permission::create(['name' => 'read pedidos']);
        $permission_update_pedidos = Permission::create(['name' => 'update pedidos']);
        $permission_delete_pedidos = Permission::create(['name' => 'delete pedidos']);

        $permission_create_producto = Permission::create(['name' => 'create productos']);
        $permission_read_producto = Permission::create(['name' => 'read productos']);
        $permission_update_producto = Permission::create(['name' => 'update productos']);
        $permission_delete_producto = Permission::create(['name' => 'delete productos']);


        $permission_create_cliente = Permission::create(['name' => 'create cliente']);
        $permission_read_cliente = Permission::create(['name' => 'read cliente']);
        $permission_update_cliente = Permission::create(['name' => 'update cliente']);
        $permission_delete_cliente = Permission::create(['name' => 'delete cliente']);

        $permissions_responsable = [
            $permission_create_rol, $permission_read_rol, $permission_update_rol, $permission_delete_rol,
            $permission_create_pedidos, $permission_read_pedidos, $permission_update_pedidos, $permission_delete_pedidos,
            $permission_create_producto, $permission_read_producto, $permission_update_producto, $permission_delete_producto,
            $permission_create_cliente, $permission_read_cliente, $permission_update_cliente, $permission_delete_cliente
        ];

        $permissions_comercial = [
            $permission_create_pedidos, $permission_read_pedidos, $permission_update_pedidos, $permission_delete_pedidos
        ];

        $permissions_administrativo = [
            $permission_create_producto, $permission_read_producto, $permission_update_producto, $permission_delete_producto,
            $permission_create_cliente, $permission_read_cliente, $permission_update_cliente, $permission_delete_cliente,
            $permission_read_pedidos, $permission_update_pedidos
        ];
        $rol_responsable->syncPermissions($permissions_responsable);
        $rol_comercial->syncPermissions($permissions_comercial);
        $rol_administrativo->syncPermissions($permissions_administrativo);
    }
}
