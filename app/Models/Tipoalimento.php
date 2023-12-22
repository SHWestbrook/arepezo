<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipoalimento extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable=[
        'id',
        'descripcion',
        'iva'
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
