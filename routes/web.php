<?php

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
// route login
Route::get('/', function () {
    return view('auth.login');
})->name('home');

Route::group(['as' => 'login'], function(){
    Route::get('/login', 'Auth\LoginController@login')->name('login');
    Route::post('/postlogin', 'Auth\LoginController@multilogin');
    Route::get('/logout', 'Auth\LoginController@logout');
    Route::get('/register','Auth\RegisterController@index');
    Route::post('/register','Auth\RegisterController@register');
});

// --  ROUTE ORANG TUA  ---

Route::group(['as' => 'orangtua','middleware' => 'auth','orangtua'], function(){
    Route::get('orangtua','Orangtua\DashboardController@index');
    Route::get('/orangtua/murid', 'Orangtua\DashboardController@profile');
    Route::get('/orangtua/datanilai','Orangtua\NilaiController@index');
    Route::get('/orangtua/izin',function(){
        return view('orangtua.izin');
    });
    Route::get('/orangtua/sakit',function(){
        return view('orangtua.sakit');
    });
    Route::get('/orangtua/listberita','Orangtua\BeritaController@index');
    Route::get('/orangtua/berita/{id}','Orangtua\BeritaController@show');

    Route::get('/camera', function(){
    	return view('orangtua.camera');
    });
});

//  -- ROUTE STAFF -- 
Route::group(['as' => 'staff', 'middleware' => 'auth','staff'], function(){

Route::get('staff','Staff\DashboardController@index');
    
});

//  -- ROUTE GURU -- 
Route::group(['as' => 'guru','middleware' => 'auth','guru'], function(){

Route::get('guru','Guru\DashboardController@index');
 
});


// -- ROUTE SUPERADMIN -- 
Route::group(['as' => 'SuperAdmin' , 'middleware' => 'auth' ],function(){
Route::get('SuperAdmin','SuperAdmin\DashboardController@index');
});



