<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/admin', [App\Http\Controllers\produitController::class, 'index'])->name('index');
Route::post('/home', [App\Http\Controllers\produitController::class, 'admin'])->name('admin');
Route::post('/home/panier', [App\Http\Controllers\produitController::class, 'endorder'])->name('endorder');
Route::get('/home/panier/{id}', [App\Http\Controllers\produitController::class, 'ajtpanier'])->name('panier.store');
Route::get('/home/panier', [App\Http\Controllers\produitController::class, 'panier'])->name('panier.panier');

Route::get('/home/{Titre}', [App\Http\Controllers\produitController::class, 'show'])->name('produit');



Auth::routes();
//Route::group(['prefix' => 'produit'], function () {
	//Route::get('/adminhome', 'produitController@admin')->name('index');
	//Route::post('/admin', 'produitController@admin')->name('admin');
//});
