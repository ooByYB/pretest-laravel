<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [UserController::class, 'index']);

// Route::get('/form', function () {
//     return view('form');
// })->name('get-form');

Route::get('/form', [UserController::class, 'form'])->name('get-form');

Route::get('/welcome', function () {
    return view('welcome');
})->name('get-welcome');