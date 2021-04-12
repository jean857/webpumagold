<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CompanyPrincipleController;
use App\Http\Controllers\Admin\CertificationController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\HighlightController;

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


Route::get('/', [HomeController::class, 'index'])->name('admin.home.index');

//Contactanos general
Route::resource('/contact-us-general', PlaceController::class)->only(['index','edit'])->names('admin.contact-us-general');
//Route::get('/contact-us-general/{id}/edit', [PlaceController::class, 'edit'])->name('admin.contact-us-general.edit');

//Categorias de servicios
Route::resource('/categories', CategoryController::class)->only(['index','create','edit'])->names('admin.categories');
Route::resource('/services', ServiceController::class)->only(['index','create','edit'])->names('admin.services');
Route::resource('/company_principles', CompanyPrincipleController::class)->only(['index','create','edit'])->names('admin.company_principles');
Route::resource('/certifications', CertificationController::class)->only(['index','create','edit'])->names('admin.certifications');
Route::resource('/users', UserController::class)->only(['index','create','edit'])->names('admin.users');
Route::resource('/banner/home', BannerController::class)->only(['index','create','edit'])->names('admin.banner_home');
Route::resource('/highlights', HighlightController::class)->only(['index','create','edit'])->names('admin.highlights');


