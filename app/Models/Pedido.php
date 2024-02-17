<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    public function usuarios() {
        return $this->belongsToMany(User::class)->withTimestamps();;
    }

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function productos() {
        return $this->belongsToMany(Producto::class)->withTimestamps();;
    }


}
