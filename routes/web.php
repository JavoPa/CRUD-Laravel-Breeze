<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObjetoController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para objetos
    Route::get('objetos', [ObjetoController::class, 'index'])->name('objetos.index');
    Route::get('objetos/{objeto}', [ObjetoController::class, 'show'])->name('objetos.show');
    Route::post('objetos', [ObjetoController::class, 'store'])->name('objetos.store');
    Route::get('objetos/create', [ObjetoController::class, 'create'])->name('objetos.create');
    Route::get('objetos/{objeto}/edit', [ObjetoController::class, 'edit'])->name('objetos.edit');
    Route::put('objetos/{objeto}', [ObjetoController::class, 'update'])->name('objetos.update');
    Route::delete('objetos/{objeto}', [ObjetoController::class, 'destroy'])->name('objetos.destroy');

    /*Se puede resumir todas las rutas del CRUD en la siguiente linea:
    Route::resource('objetos', ObjetoController::class);
    */
});

require __DIR__.'/auth.php';
