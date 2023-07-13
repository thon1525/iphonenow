<?php

use App\Http\Controllers\UserController;
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
////
Route::get('/form', function () {
    return view('form.form');
});

Route::post('/topage',[UserController::class,'makeadmin'])->name('make');

/// 

Route::get('/formuser', function () {
    return view('formuser.user');
});


Route::post('/toto',[UserController::class,'make'])->name('makeuser');
Route::get('/gotwo',[UserController::class,'showdata'])->name('makeuser');