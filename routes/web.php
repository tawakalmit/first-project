<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudControlller;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MycardController;

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

Route::get('crud', [CrudControlller::class, 'create'])->name('crud.index');
Route::post('crud', [CrudControlller::class, 'store'])->name('crud.store');

Route::get('mycard', [MycardController::class, 'index']);

Route::get('tasks', [TaskController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(Headline::class)->group(function () {
    Route::get('/headline.index', 'index');
});