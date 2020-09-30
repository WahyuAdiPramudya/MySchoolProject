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

    Route::get('/orangtua','Orangtua\DashboardController@index');
    Route::get('/orangtua/murid', 'Orangtua\DashboardController@profile');
    Route::get('/orangtua/datanilai','Orangtua\NilaiController@index');
    Route::get('/orangtua/listprofile','Orangtua\DashboardController@listprofile');
    Route::get('orangtua/profileorangtua','Orangtua\DashboardController@profileorangtua');
    Route::get('orangtua/profilesiswa','Orangtua\DashboardController@profilesiswa');
    Route::get('orangtua/absenrumah','Orangtua\DashboardController@absenrumah');
    Route::post('/orangtua/postAbsen','Orangtua\DashboardController@postabsen');
     Route::get('/orangtua/success', function(){
        return view('orangtua.success');
    });

    Route::get('orangtua/listabsen/{id}','Orangtua\AbsensiController@listAbsen');
    Route::get('/orangtua/izin','Orangtua\SuratController@formizin');
    Route::get('/orangtua/sakit','Orangtua\SuratController@formsakit');
    Route::post('/orangtua/postsurat','Orangtua\SuratController@postsurat');
    Route::get('/orangtua/listberita','Orangtua\BeritaController@index');
    Route::get('/orangtua/berita/{id}','Orangtua\BeritaController@show');
    Route::get('/orangtua/listupdate','Orangtua\DashboardController@listupdate');
    Route::get('/orangtua/update/{id}','Orangtua\DashboardController@update');
    Route::get('/orangtua/tagihan','Orangtua\TagihanController@index');

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
Route::resource('jadwal','Staff\JadwalController');
Route::resource('kelola_akun','Staff\ManageAcount');
Route::get('mapels/datatable','Staff\MapelController@datatable');
Route::get('kelass/datatable','Staff\KelasController@datatables');
Route::get('siswas/datatable','Staff\SiswaController@datatables');   
Route::get('gurus/datatable','Staff\GuruController@datatable'); 
Route::get('akun/datatable','Staff\ManageAcount@datatable');
Route::get('absensi/absen','Staff\AbsensiController@index');
Route::get('Download/{id_jadwal}','Staff\JadwalController@download')->name('download');


});


//  -- ROUTE GURU -- 

Route::group(['as' => 'guru.',' namescape' => 'guru', 'middleware' => 'auth', 'guru'], function(){

    Route::get('/guru','Guru\DashboardController@index');
	Route::get('/getKelasAbsen','Guru\GuruController@getKelasAbsen')->name('getKelasAbsen');
    Route::get('/guru/listberita','Guru\GuruController@listberita');
    Route::get('/guru/berita/{id}','Guru\GuruController@berita');
	Route::get('/getSiswaAbsen/{id}','Guru\GuruController@getSiswaAbsen')->name('getSiswaAbsen');
	Route::post('/guru/postNilai','Guru\GuruController@postNilai');
	Route::get('/getKelasNilai','Guru\GuruController@getKelasNilai')->name('getKelasNilai');
	Route::get('/getSiswaNilai/{id}','Guru\GuruController@getSiswaNilai')->name('getSiswaNilai');
	Route::get('/carikelas','Guru\GuruController@cariKelas')->name('search');
	Route::post('/guru/postAbsen','Guru\GuruController@absensi')->name('absensi');
    Route::get('/guru/DataNilaiSiswa/{id}','Guru\GuruController@DataNilaiSiswa');
    Route::get('/guru/Listnilaiperkelas','Guru\GuruController@ListNilaiPerkelas');
    Route::get('/guru/Listabsenperkelas','Guru\GuruController@ListAbsenPerkelas');
    Route::get('/guru/getDataSiswaAbsen/{id}','Guru\GuruController@getDataSiswaAbsen')->name('dataAbsen');
    Route::get('/guru/listdatasiswa','Guru\SiswaController@listdatasiswa');
    Route::get('/guru/datasiswa/{id_kelas}','Guru\SiswaController@datasiswa');
    Route::get('/guru/detailsiswa/{id_siswa}','Guru\SiswaController@detailsiswa');
    Route::get('/guru/calender','Guru\GuruController@getCalender');
    Route::get('/guru/SiswaByDate/{id}','Guru\GuruController@SiswaByDate');
    Route::get('/guru/successabsen', function(){
        return view('guru.absensi.success');
    });
     Route::get('/guru/successnilai', function(){
        return view('guru.nilai_tugas.success');
    });
     Route::get('/guru/profile', function(){
        return view('guru.profile');
    });
    Route::get('/guru/absenhariini','Guru\GuruController@Absenperhari');
    Route::get('guru/list','Guru\GuruController@ListJadwal');
    Route::get('/guru/jadwal/{id_kelas}','Guru\GuruController@jadwal');
    Route::get('/Download/{id_kelas}','Guru\GuruController@download');
    Route::get('/guru/surat','Guru\SiswaController@surat');
    Route::get('/guru/detail_surat/{id}','Guru\SiswaController@detail_surat');

 
});


// -- ROUTE SUPERADMIN -- 
Route::group(['as' => 'SuperAdmin.','prefix' => 'SuperAdmin','namescape' => 'SuperAdmin','middleware' => 'auth', 'SuperAdmin'], function(){

Route::get('dashboard','SuperAdmin\DashboardController@index')->name('dashboard');
Route::resource('Sekolah','SuperAdmin\SekolahController');
Route::resource('staff','SuperAdmin\StaffController');
Route::resource('Orangtua','SuperAdmin\DataUserController');
Route::resource('Guru','SuperAdmin\DataGuruController');
Route::resource('Update','SuperAdmin\UpdateController');
Route::get('Orangtua1/datatable','SuperAdmin\DataUserController@datatable');
Route::get('staff1/datatable','SuperAdmin\StaffController@datatable');

});




