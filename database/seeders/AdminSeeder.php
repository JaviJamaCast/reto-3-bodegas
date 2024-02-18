<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $responsable = User::create([
            'nombre_usuario' => 'javijama',
            'nombre' => 'Javier',
            'apellidos' => 'Jamaica Castaño',
            'email' => 'javier@email.com',
            'password' => Hash::make('12345678'),
            'foto_perfil' => fake()->imageUrl(640, 480),
            'email_verified_at' => now(),
        ]);

        $responsableRole = Role::where('name', 'responsable')->first();
        $responsable->assignRole($responsableRole);

        $administrativo = User::create([
            'nombre_usuario' => 'julijama',
            'nombre' => 'Juliana',
            'apellidos' => 'Jamaica Castaño',
            'email' => 'juliana@email.com',
            'password' => Hash::make('12345678'),
            'foto_perfil' => fake()->imageUrl(640, 480),
            'email_verified_at' => now(),
        ]);

        $administrativoRole = Role::where('name', 'administrativo')->first();
        $administrativo->assignRole($administrativoRole);

        $comercial = User::create([
            'nombre_usuario' => 'santiperea',
            'nombre' => 'Santiago',
            'apellidos' => 'Perea',
            'email' => 'perea@email.com',
            'password' => Hash::make('12345678'),
            'foto_perfil' => fake()->imageUrl(640, 480),
            'email_verified_at' => now(),
        ]);

        $comercialRole = Role::where('name', 'comercial')->first();
        $comercial->assignRole($comercialRole);
    }
}
