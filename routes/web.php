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

Route::get('/welcome', function () {
    return view('welcome');
});
// Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/card/{pack_id}', [App\Http\Controllers\SiteController::class, 'card'])->name('card');
Route::get('/categorys/{pack_id}', [App\Http\Controllers\SiteController::class, 'card_category'])->name('categorys');
Route::get('/', [App\Http\Controllers\SiteController::class, 'cards'])->name('cards');