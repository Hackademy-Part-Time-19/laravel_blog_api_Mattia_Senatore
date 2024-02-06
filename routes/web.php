<?php

use App\Http\Controllers\anime;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apicontroller;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[anime::class,'home'])->name('homepage');

Route::get('/{genre}', [anime::class,'bygenre'])->name('generi');

Route::get('/club/{id}',[anime::class,'club'])->name('clubs');

Route::get('/articoli',[anime::class,'testApi'])->name('api.articles');
