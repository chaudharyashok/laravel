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

Route::get('/ashok', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     return view('firstpage');
// });

Route::get('/hello','App\Http\Controllers\myController@index');



//to show addproductform
Route::get('/addproduct','App\Http\Controllers\myController@showproductform');
//to insert aproduct
Route::post('/storeproduct','App\Http\Controllers\myController@store')->name('storeproduct');

//showproduct/ showdata
Route::get('/showproduct','App\Http\Controllers\myController@show')->name('showproduct');

//to show data hompage
Route::get('/homepage','App\Http\Controllers\myController@homepage')->name('homepage');
//to delete product data
Route::get('/deletedata/{id}','App\Http\Controllers\mycontroller@destroy')->name('delete');
//to edit product 
Route::get('//editdat/{id}','App\Http\Controllers\myController@edit')->name('editproduct');