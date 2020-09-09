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



//  -- ROUTE STAFF -- 
Route::group(['as' => 'staff', 'middleware' => 'auth','staff'], function(){

Route::get('staff','Staff\DashboardController@index');
    
});

//  -- ROUTE GURU -- 
Route::group(['as' => 'guru','middleware' => 'auth','guru'], function(){

	Route::get('guru','Guru\DashboardController@index')->name('dashboard');
	Route::get('/getKelasAbsen','Guru\GuruController@getKelasAbsen')->name('getKelasAbsen');
	Route::get('/getSiswaAbsen/{id}','Guru\GuruController@getSiswaAbsen')->name('getSiswaAbsen');
	Route::post('/postNilai','Guru\GuruController@postNilai')->name('postNilai');
	Route::get('/getKelasNilai','Guru\GuruController@getKelasNilai')->name('getKelasNilai');
	Route::get('/getSiswaNilai/{id}','Guru\GuruController@getSiswaNilai')->name('getSiswaNilai');
	Route::get('/carikelas','Guru\GuruController@cariKelas')->name('search');
	Route::post('/postabsen','Guru\GuruController@absensi')->name('absensi');
 
});


// -- ROUTE SUPERADMIN -- 
Route::group(['as' => 'SuperAdmin' , 'middleware' => 'auth' ],function(){
Route::get('SuperAdmin','SuperAdmin\DashboardController@index');
});



