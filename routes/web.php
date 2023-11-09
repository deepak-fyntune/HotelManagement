<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin/index');
});


Route::get('/controller', [User::class, 'showuser']);
Route::post('/loginprocess', [User::class, 'store'])->name('loginprocess');


 