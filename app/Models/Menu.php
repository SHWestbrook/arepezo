<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;


class Menu extends Model
{
    use CrudTrait;
    use HasFactory;


    protected $fillable=[
        'nombre',
        'descripcion',
        'tipoAlimento_id',
        'categoriaMenu_id',
        'precioVenta'
    ];

    public function categoriamenu()
    {
        return $this->belongsTo(Categoriamenu::class,'categoriaMenu_id');
    }
    public function tipoalimento()
    {
        return $this->belongsTo(Tipoalimento::class,'tipoAlimento_id');
    }
    public function recetas()
    {
        return $this->hasMany(Recetas::class);
    }

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class);
    }

    //consultas

   public static function obtenerMenus()
    {
        return self::select('menus.nombre', 'menus.descripcion', 'categoriamenus.descripcion as categoria', 'tipoalimentos.descripcion as tipo_alimento', 'menus.precioVenta')
            ->leftjoin('categoriamenus', 'menus.categoriaMenu_id', '=', 'categoriamenus.id')
            ->leftjoin('tipoalimentos', 'menus.tipoAlimento_id', '=', 'tipoalimentos.id');
    }

}
