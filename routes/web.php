<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HistoricoController;

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
});

Route::get('/vehiculo/create', [VehiculoController::class, 'create'])->name('vehiculo.create');
Route::get('/vehiculo', [VehiculoController::class, 'index'])->name('vehiculo.index');
Route::post('/vehiculo', [VehiculoController::class, 'store'])->name('vehiculo.store');
Route::get('/vehiculo/{vehiculo}/edit', [VehiculoController::class, 'edit'])->name('vehiculo.edit');
Route::put('/vehiculo/{vehiculo}/update', [VehiculoController::class, 'update'])->name('vehiculo.update');

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}/update', [UserController::class, 'update'])->name('user.update');
Route::get('/user/{user}/vehiculos', [UserController::class, 'vehiculos'])->name('user.vehiculos');

Route::get('/historico', [HistoricoController::class, 'index'])->name('historico.index');

require __DIR__.'/auth.php';
