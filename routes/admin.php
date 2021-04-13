<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CompanyPrincipleController;
use App\Http\Controllers\Admin\CertificationController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BannerHomeController;
use App\Http\Controllers\Admin\HighlightController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\BannerAboutUsController;
use App\Http\Controllers\Admin\BannerServiceController;

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
Route::resource('/banner/home', BannerHomeController::class)->only(['index','create','edit'])->names('admin.banner_home');
Route::resource('/banner/service', BannerServiceController::class)->only(['index','create','edit'])->names('admin.banner_service');
Route::resource('/banner/about_us', BannerAboutUsController::class)->only(['index','create','edit'])->names('admin.banner_about_us');
Route::resource('/highlights', HighlightController::class)->only(['index','create','edit'])->names('admin.highlights');
Route::resource('/contacts', ContactUsController::class)->only(['index'])->names('admin.contacts');
Route::resource('/profile', ProfileController::class)->only(['index'])->names('admin.profile');
Route::get('/profile/password', [ProfileController::class,'index_password'])->name('admin.profile.password.index');


