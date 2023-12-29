<?php

namespace App\Http\Controllers;

use App\Models\Categoriamenu;
use App\Models\Menu;

use App\Models\Tipoalimento;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        //
        /*$menus=Menu::obtenerMenus();
        return view('menu.index',compact('menus'));*/

        $tipoAlimentos=Tipoalimento::obtenerTipo()->get();
        $categoriaMenus=Categoriamenu::obtenerCat()->get();

        return view('menu.index', compact('tipoAlimentos','categoriaMenus'));


    }

    public function datatable(Request $request)
    {

        if ($request->ajax()) {
            //el ->get te trae de inmediato el resultado de la consulta no nos interesa cuando estamos con
            // DataTables ya que cuando llegue a toJson lo que haya en la consulta se lo lleva a json directamente
            $menus = Menu::obtenerMenus();


            return DataTables::of($menus)
                ->filter(function ($query) use ($request) {

                    if ($request->has('tipoAlimento')) {//filtro de tipoAlimento
                        $query->where('tipoAlimento_id', 'like', "%" . $request->tipoAlimento . "%");
                    }
                    if ($request->has('categoria')) {//filtro de categoria
                        //no puede haber nulls si no no los trae
                        $query->where('categoriaMenu_id', 'like', "%" . $request->categoria . "%");
                    }
                    //aplicar todos los filtros que se quieran

                })
                ->toJson();
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $menu=Menu::findOrFail($id);
        return view('menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
