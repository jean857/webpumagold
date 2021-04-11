<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
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

Route::get('/', [HomeController::class, 'index'])->name('web.home.index');
Route::get('/quienes-somos', [AboutUsController::class, 'index'])->name('web.about-us.index');
Route::get('/contactanos', [ContactUsController::class, 'index'])->name('web.contact-us.index');

Route::get('/servicios/{slug_service}/', [ServiceController::class, 'index'])->name('web.service.index');

Route::post('/send/contact', [ContactUsController::class, 'sendMail'])->name('web.contact-us.send');


Auth::routes();

