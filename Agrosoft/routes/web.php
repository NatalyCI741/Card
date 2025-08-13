<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CultivosController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
Route::get('/welcome',function() {
    return view ('welcome');
})-> name('welcome');

Route::get('/formcultivo', [CultivosController::class, 'create'])->name('cultivos.create');
Route::get('/lista', [CultivosController::class, 'index'])->name('cultivos.index');
Route::post('/store',[CultivosController::class,'store'])->name('cultivos.store');

// Ruta para mostrar el formulario de actualizar
Route::put('/cultivos/{id}', [CultivosController::class, 'update'])->name('cultivos.update');
// Ruta para mostrar el formulario de edición de un cultivo
Route::get('/cultivos/{id}/edit', [CultivosController::class, 'edit'])->name('cultivos.edit');
// Ruta para eliminar un cultivo
Route::delete('/cultivos/{id}', [CultivosController::class, 'destroy'])->name('cultivos.destroy');

use App\Http\Controllers\InsumoController;

Route::resource('insumos', InsumoController::class);


use App\Http\Controllers\HerramientaController;

Route::prefix('bodega')->group(function () {
    Route::get('/herramientas', [HerramientaController::class, 'index'])->name('herramientas.index');
    Route::get('/herramientas/crear', [HerramientaController::class, 'create'])->name('herramientas.create');
    Route::post('/herramientas', [HerramientaController::class, 'store'])->name('herramientas.store');
    Route::get('/herramientas/{id}', [HerramientaController::class, 'show'])->name('herramientas.show');
    Route::get('/herramientas/{id}/editar', [HerramientaController::class, 'edit'])->name('herramientas.edit');
    Route::put('/herramientas/{id}', [HerramientaController::class, 'update'])->name('herramientas.update');
    Route::delete('/herramientas/{id}', [HerramientaController::class, 'destroy'])->name('herramientas.destroy');
});
