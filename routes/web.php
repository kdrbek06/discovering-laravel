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

Route::get('/', [\App\Http\Controllers\Controller::class, 'showIndex'])->name('index');
Route::get('/card',[\App\Http\Controllers\Controller::class, 'getCardDetail'])->name('card');
Route::get('/contact',[\App\Http\Controllers\Controller::class, 'sendContact'])->name('contact');
Route::post('/contact' ,[\App\Http\Controllers\Controller::class, 'handleForm']);

