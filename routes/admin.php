<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PlaceController;
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


Route::get('/', [HomeController::class, 'index']);
Route::get('/contact-us-general', [PlaceController::class, 'index'])->name('contact-us-general.index');
Route::get('/contact-us-general/{id}/edit', [PlaceController::class, 'edit'])->name('contact-us-general.edit');

//Rutas de administrador


