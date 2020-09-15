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
    Route::get('/orangtua/listprofile','Orangtua\DashboardController@listprofile');
    Route::get('orangtua/profileorangtua','Orantua\DashboardController@profileorangtua');
    Route::get('orangtua/profilesiswa','Orangtua\DashboardController@profilesiswa');

    });
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

	Route::get('guru','Guru\DashboardController@index')->name('dashboard');
	Route::get('/getKelasAbsen','Guru\GuruController@getKelasAbsen')->name('getKelasAbsen');
    Route::get('/guru/listberita','Guru\GuruController@listberita');
    Route::get('/guru/berita/{id}','Guru\GuruController@berita');
	Route::get('/getSiswaAbsen/{id}','Guru\GuruController@getSiswaAbsen')->name('getSiswaAbsen');
	Route::post('/postNilai','Guru\GuruController@postNilai')->name('postNilai');
	Route::get('/getKelasNilai','Guru\GuruController@getKelasNilai')->name('getKelasNilai');
	Route::get('/getSiswaNilai/{id}','Guru\GuruController@getSiswaNilai')->name('getSiswaNilai');
	Route::get('/carikelas','Guru\GuruController@cariKelas')->name('search');
	Route::post('/postabsen','Guru\GuruController@absensi')->name('absensi');
    Route::get('/guru/DataNilaiSiswa/{id}','Guru\GuruController@DataNilaiSiswa');
    Route::get('/guru/Listnilaiperkelas','Guru\GuruController@ListNilaiPerkelas');
    Route::get('/guru/Listabsenperkelas','Guru\GuruController@ListAbsenPerkelas');
    Route::get('/guru/getDataSiswaAbsen/{id}','Guru\GuruController@getDataSiswaAbsen')->name('dataAbsen');


 
});


// -- ROUTE SUPERADMIN -- 
Route::group(['as' => 'SuperAdmin' , 'middleware' => 'auth' ],function(){
Route::get('SuperAdmin','SuperAdmin\DashboardController@index');
});



