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

Route::group(['as' => 'staff.','prefix' => 'staff','namescape' => 'staff','middleware' => 'auth', 'staff'], function(){

Route::get('dashboard','Staff\DashboardController@index')->name('dashboard');
Route::resource('kelas','Staff\KelasController');
Route::resource('mapel','Staff\MapelController');
Route::resource('berita','Staff\BeritaController');
Route::resource('siswa','Staff\SiswaController');
Route::resource('guru','Staff\GuruController');
Route::resource('kelola_akun','Staff\ManageAcount');
Route::get('mapels/datatable','Staff\MapelController@datatable');
Route::get('kelass/datatable','Staff\KelasController@datatables');
Route::get('siswas/datatable','Staff\SiswaController@datatables');   
Route::get('gurus/datatable','Staff\GuruController@datatable'); 
Route::get('akun/datatable','Staff\ManageAcount@datatable');
Route::get('absensi/absen','Staff\AbsensiController@index');

});


//  -- ROUTE GURU -- 

Route::group(['as' => 'guru.', 'prefix' => 'guru', ' namescape' => 'guru', 'middleware' => 'auth', 'guru'], function(){

Route::get('dashboard','Guru\DashboardController@index')->name('dashboard');

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
Route::group(['as' => 'SuperAdmin.','prefix' => 'SuperAdmin','namescape' => 'SuperAdmin','middleware' => 'auth', 'SuperAdmin'], function(){

Route::get('dashboard','SuperAdmin\DashboardController@index')->name('dashboard');
Route::resource('Sekolah','SuperAdmin\SekolahController');
Route::resource('staff','SuperAdmin\StaffController');
Route::resource('Orangtua','SuperAdmin\DataUserController');
Route::resource('Guru','SuperAdmin\DataGuruController');
Route::get('Orangtua1/datatable','SuperAdmin\DataUserController@datatable');
Route::get('staff1/datatable','SuperAdmin\StaffController@datatable');
});



