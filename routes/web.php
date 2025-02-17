<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\HalamanUtama;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});
route::get('/login', [LoginController::class, 'halamanLogin']);

route::get('/halutama', [HalamanController::class, 'halamanUtama']);
