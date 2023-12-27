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

        $menus = Menu::obtenerMenus()->get();

        if ($request->ajax()) {
            $menus=$this->filtrarMenus($request)->get();

            return Datatables::of($menus)
                ->toJson();
        }


        return view('menu.index', compact('menus','tipoAlimentos','categoriaMenus'));


    }

    private function filtrarMenus(Request $request){

        $query = Menu::obtenerMenus();

        return $query
            ->when($request->tipoAlimento, function ($query, $tipoAlimento) {
                return $query->where('tipo_alimento', $tipoAlimento);
            })
            ->when($request->categoria, function ($query, $categoria) {
                return $query->where('categoria_menu', $categoria);
            });
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
