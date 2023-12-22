<?php

namespace App\Http\Controllers;

use App\Models\Menu;

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

        $menus = $this->filtrarMenus($request);

        if ($request->ajax()) {
            $menus = Menu::obtenerMenus();

            return Datatables::of($menus)
                ->toJson();
        }

        return view('menu.index', compact('menus'));


    }

    private function filtrarMenus(Request $request){

        return Menu::obtenerMenus()
            ->when($request->tipoAlimento, function ($query, $tipoAlimento) {
                return $query->where('tipo_alimento', $tipoAlimento);
            })
            ->when($request->categoria, function ($query, $categoria) {
                return $query->where('categoria_menu', $categoria);
            })
            ->get();
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
