<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable=[
        'nombre',
        'email',
        'telefono',
        'direccion',
        'codPostal',
        'ciudad',
        'provincia'
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
