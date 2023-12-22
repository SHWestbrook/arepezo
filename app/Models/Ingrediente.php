<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable=[
        'nombre',
        'precioKg'
        ];

    public function receta()
    {
        return $this->belongsTo(Receta::class);
    }
}
