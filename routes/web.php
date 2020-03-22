<?php

use App\Http\Controllers\UserAction;
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
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function() {
    return (new App\Http\Controllers\UserAction)->logout();
});

Route::post('/loginPost', 'UserAction@loginPost');
Route::get('/register', 'UserAction@register');
Route::post('/registerPost', 'UserAction@registerPost');
Route::get('/home_user', 'UserAction@index');
/*Route::get('/home_user', 'User@index');
Route::get('/login', view('welcome'));
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');*/
