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

//Route::get('/', function () {
//    return view('layout');
//});


//Route::get('/greeting', function(){
//    return 'Helloo World';
//});

Route::get('/', [\App\Http\Controllers\Controller::class, 'helloWorld'])->name('home');
Route::get('/goodbye',[\App\Http\Controllers\Controller::class, 'sayGoodBye'])->name('bye');
Route::get('/form',[\App\Http\Controllers\Controller::class, 'form1'])->name('form1');
Route::post('/form' ,[\App\Http\Controllers\Controller::class, 'handleForm']);


