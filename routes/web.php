<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudControlller;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MycardController;
use App\Http\Controllers\Mycard2Controller;
use App\Http\Controllers\Mycard3Controller;

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

Route::get('/', HomeController::class);

Route::get('crud', [CrudControlller::class, 'index'])->name('crud.index');
Route::post('crud', [CrudControlller::class, 'store'])->name('crud.store');
Route::get('crud/{id}/edit', [CrudControlller::class, 'edit'])->name('crud.edit');
Route::put('crud/{id}', [CrudControlller::class, 'update'])->name('crud.update');
Route::delete('crud/{id}', [CrudControlller::class, 'destroy'])->name('crud.destroy');

Route::get('mycard', [MycardController::class, 'index']);
Route::post('crud', [MycardController::class, 'store']);

Route::get('mycard2', [Mycard2Controller::class, 'index'])->name('mycard2.index');
Route::post('mycard2', [Mycard2Controller::class, 'store'])->name('mycard2.store');
Route::get('mycard2/{id}/edit', [Mycard2Controller::class, 'edit'])->name('mycard2.edit');
Route::put('mycard2/{id}', [Mycard2Controller::class, 'update'])->name('mycard2.update');
Route::delete('mycard2/{id}', [Mycard2Controller::class, 'destroy'])->name('mycard2.destroy');

Route::get('mycard3', [Mycard3Controller::class, 'index'])->name('mycard3.index');
Route::post('mycard3', [Mycard3Controller::class, 'store'])->name('mycard3.store');
Route::get('mycard3/{id}/edit', [Mycard3Controller::class, 'edit'])->name('mycard3.edit');
Route::put('mycard3/{id}', [Mycard3Controller::class, 'update'])->name('mycard3.update');
Route::delete('mycard3/{id}', [Mycard3Controller::class, 'destroy'])->name('mycard3.destroy');

Route::get('tasks', [TaskController::class, 'index']);
Route::get('tasks/create', [TaskController::class, 'create']);
Route::post('tasks', [TaskController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(Headline::class)->group(function () {
    Route::get('/headline.index', 'index');
});