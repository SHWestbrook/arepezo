<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable=[
        'fechaPedido',
        'total',
        'gastoEnvio',
        'subtotal',
        'telefono',
        'direccion',
        'codPostal',
        'Ciudad',
        'usuarios_id'
    ];
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
    public function menus(){
        return $this->belongsToMany(Menu::class);
    }
}
