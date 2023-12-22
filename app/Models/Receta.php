<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use CrudTrait;
    use HasFactory;

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    public function ingredientes()
    {
        return $this->hasMany(Ingrediente::class);
    }
}
