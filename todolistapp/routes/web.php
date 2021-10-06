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
    return view('welcome');
});
//Все руты
Auth::routes();

Route::get('logout','Auth\LoginController@logout');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/tasks',[App\Http\Controllers\Api\todoController::class,'index']);

//Route::post('/check',[App\Http\Controllers\Api\todoController::class,'check']);

//Route::get('/todo',[App\Http\Controllers\Api\todoController::class,'index1']);

Route::apiResources([
    'todo'=> todohelpcontroller::class,
]);
//Route::get('logout','Auth\LoginController@logout');
//Route::post('/home',[App\Http\Controllers\Api\todoController::class,'check']);

/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
