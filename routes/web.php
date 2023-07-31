<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[AdminController::class,'Admin']);

Route::post('/store',[AdminController::class,'StoreData'])->name('store-data');

Route::get('/price/{book_id}',[AdminController::class,'Price']);



Route::controller(BookController::class)->group(function(){
    Route::get('/all/book','AllBook')->name('all-book');
    Route::get('/Add/book','AddBook')->name('add-book');
    Route::post('/store/book','StoreBook')->name('store-book');
});


