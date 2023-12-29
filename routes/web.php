<?php

use App\Http\Controllers\MenusController;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Da todas las vistas segun lo que haya en los metodos del controller
Route::get('/menus/datatables',[MenusController::class, 'datatable'])->name('menus.datatable');
Route::resource('/menus', MenusController::class);

