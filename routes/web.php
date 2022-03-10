<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;

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

Route::get('/template', function () {
    
    return view('template');
});
Route::get('/compteur', function () {
    return view('compteur');
});
Route::post("user", [UserAuth::class, 'userLogin']);
Route::view("login", 'login');
Route::view("InfoPerso", 'InfoPerso');

Route::get('/login', function () {
    if (session()->has('user'))
    {
       return redirect('template');
    }
    return view('login');
});

Route::get('/logout', function () {
    if (session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('login');
});
