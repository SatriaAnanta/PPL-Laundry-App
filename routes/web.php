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

Route::get('/', function () {
    return view('landing');
});

Route::post('laundry', ['as' => 'laundry.index', 'uses' => 'App\Http\Controllers\LaundryController@searchLaundry']);
Route::get('laundry', ['as' => 'laundry.index', 'uses' => 'App\Http\Controllers\LaundryController@searchLaundry']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route CRUD
Route::get('/data_laundry','App\Http\Controllers\DataLaundryController@index');
Route::get('/data_laundry/tambah','App\Http\Controllers\DataLaundryController@tambah');
Route::post('/data_laundry/store','App\Http\Controllers\DataLaundryController@store');
