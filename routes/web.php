<?php

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
Route::get('/','App\Http\Controllers\Homecontroller@login')->name('login');
Route::post('/login','App\Http\Controllers\Homecontroller@log')->name('log');
Route::get('/logout','App\Http\Controllers\Homecontroller@logout')->name('logout');

Route::get('/product','App\Http\Controllers\Homecontroller@product')->name('product');

Route::get('/view_products','App\Http\Controllers\Homecontroller@viewproduct')->name('viewproduct');

Route::get('/add_products','App\Http\Controllers\Homecontroller@addproduct')->name('addproduct');
Route::post('/save_products','App\Http\Controllers\Homecontroller@saveproduct')->name('saveproduct');

Route::get('/edit_productsview/{id}','App\Http\Controllers\Homecontroller@editview')->name('editview');
Route::post('/edit_product','App\Http\Controllers\Homecontroller@editproduct')->name('editproduct');

Route::get('/delete_product/{id}','App\Http\Controllers\Homecontroller@deleteproduct')->name('deleteproduct');

Route::get('/user_register','App\Http\Controllers\Homecontroller@userregister')->name('userregister');
Route::post('/save_user','App\Http\Controllers\Homecontroller@saveuser')->name('saveuser');

Route::get('/view_user','App\Http\Controllers\Homecontroller@viewuser')->name('viewuser');
Route::get('/delete_user/{id}','App\Http\Controllers\Homecontroller@deleteuser')->name('deleteuser');