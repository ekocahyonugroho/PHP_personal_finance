<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    if (Session::get('login')) {
        return (new App\Http\Controllers\UserAction)->index();
    }else{
        return view('login');
    }
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function() {
    return (new App\Http\Controllers\UserAction)->logout();
});

Route::get('/register', 'UserAction@register');
Route::get('/home_user', 'UserAction@index');
Route::get('/setCategory', function(){
    return view('setcategory');
});

// POST DATA
Route::post('/loginPost', 'UserAction@loginPost');
Route::post('/registerPost', 'UserAction@registerPost');
Route::post('/addSetCategory', 'UserAction@addSetCategoryPost');




/*Route::get('/home_user', 'User@index');
Route::get('/login', view('welcome'));
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');*/

/*AngularJS Routes*/
Route::get('/userdashboard', function() {
    return view('dashboard');
});
/*END Angular JS Routes*/
