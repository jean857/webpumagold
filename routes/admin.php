<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
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

//Contactanos general
Route::get('/contact-us-general', [PlaceController::class, 'index'])->name('contact-us-general.index');
Route::get('/contact-us-general/{id}/edit', [PlaceController::class, 'edit'])->name('contact-us-general.edit');

//Categorias de servicios
Route::resource('/categories', CategoryController::class);
Route::resource('/services', ServiceController::class);


