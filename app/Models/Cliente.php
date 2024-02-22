<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo_acceso',
        'nombre',
        'apellidos',
        'telefono',
        'direccion',
        'email',
        'foto_perfil',
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
