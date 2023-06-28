<?php

use App\Http\Controllers\ProvinciasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/', function () {
    return view('provincia');
});*/

Route::get('/', [ProvinciasController::class, 'view'])->name('provincias');

Route::post('/', [ProvinciasController::class, 'insert'])->name('provincias');

Route::get('provincia/{codigo}', [ProvinciasController::class, 'pforCodigo'])->name('provincia');

Route::patch('provincia/{codigo}', [ProvinciasController::class, 'update'])->name('provincia');

Route::delete('provincia/{codigo}', [ProvinciasController::class, 'delete'])->name('provincia');
