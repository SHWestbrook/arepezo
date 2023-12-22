<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoriamenu extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable=[
        'id',
        'descripcion'
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

}
