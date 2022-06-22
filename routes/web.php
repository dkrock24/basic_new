<?php

use App\Http\Controllers\InformationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SuscripcionController;
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

Route::group(['namespace' => 'Admin',
            'prefix' => 'admin',
            'middleware' => 'auth'], function(){

    Route::get('/contactos', [InformationController::class, 'index'])->name('contactos');
    Route::get('show/{information}', [InformationController::class, 'show'])->name('contact_detail');
    Route::get('contacto/delete/{information}', [InformationController::class, 'destroy'])->name('delete_information');
    Route::get('/export-information',[InformationController::class,'exportInformation'])->name('export-information');

    Route::get('/suscripciones', [SuscripcionController::class, 'index'])->name('suscripciones');
    Route::get('suscripcion/delete/{suscripcion}', [SuscripcionController::class, 'destroy'])->name('delete_suscription');
    Route::get('/export-suscripcion',[SuscripcionController::class,'exportSuscripcion'])->name('export-suscripcion');

});

Route::get('/', [PageController::class, 'posts'])->name('posts');
Route::get('blog/{post:slug}', [PageController::class, 'post'])->name('post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



