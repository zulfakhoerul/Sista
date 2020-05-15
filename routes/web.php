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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
});

Route::get('index-admin', function () {
    return view('index-admin');
});

Route::get('pendaftarann', function () {
    return view('pendaftarann');
});

Route::get('about', function () {
    return view('about');
});

Route::get('senitari', function () {
    return view('senitari');
});

Route::get('penyewaan', function () {
    return view('penyewaan');
});

Route::get('admin/DashboardAdmin', function () {
    return view('admin/DashboardAdmin');
});

Route::get('admin/loginadmin', function () {
    return view('admin/loginadmin');
});

Route::get('admin/registeradmin', function () {
    return view('admin/registeradmin');
});
Route::get('admin/users', function () {
    return view('admin/users');
});
Route::get('user/pendaftaran_user', function () {
    return view('user/pendaftaran_user');
});
Route::get('user/form_sewa', function () {
    return view('user/form_sewa');
});
Route::get('anggota/loginAnggota', function () {
    return view('anggota/loginAnggota');
});
Route::get('anggota/DashboardAnggota', function () {
    return view('anggota/DashboardAnggota');
});

//------------------User---------------------------------

Route::get('/user/home_user', 'User@index');
Route::get('/index', 'User@loginUser');
Route::post('/loginUserPost', 'User@loginUserPost');
Route::get('/registerUser', 'User@registerUser');
Route::post('/registerUserPost', 'User@registerUserPost');
Route::get('/logoutUser', 'User@logoutUser');

//-----------------Anggota-------------------------------

Route::get('/index', 'AnggotaController@loginAnggota');
Route::post('/loginAnggotaPost', 'AnggotaController@loginAnggotaPost');
Route::get('/pendaftarann', 'Pendaftaran@pendaftarann');
Route::post('/pendaftarannPost', 'Pendaftaran@pendaftarannPost');
Route::get('/user/home_user', 'User@index');
Route::get('/logoutAnggota', 'AnggotaController@logoutAnggota');

//------------------Admin----------------------------------

Route::get('/admin/DashboardAdmin','Admin@index');

Route::get('/admin/DashboardAdmin', 'Admin@index');
Route::get('/index', 'Admin@login');
Route::post('/loginPost', 'Admin@loginPost');
Route::get('/register', 'Admin@register');
Route::post('/registerPost', 'Admin@registerPost');
Route::get('/logout', 'Admin@logout');

Route::get('CrudAkunUser','CrudAkunUserController@index');
Route::get('CrudAkunUser','CrudAkunUserController@tampil_data');
Route::get('TambahAkunUser','CrudAkunUserController@tambah');
Route::post('AksiTambahAkunUser','CrudAkunUserController@store');
Route::get('UbahAkunUser{id_user}','CrudAkunUserController@ubah');
Route::put('AksiUbahAkunUser{id_user}','CrudAkunUserController@update');
Route::get('HapusAkunUser{id_user}','CrudAkunUserController@delete');

Route::get('CrudAkunAnggota','CrudAkunAnggotaController@tampil_data');

Route::get('CrudAkunAdmin','CrudAkunAdminController@tampil_data');

Route::get('CrudSeniTari','CrudSeniTariController@tampil_data');

Route::get('CrudProduk','CrudProdukController@tampil_data');
Route::get('TambahProduk','CrudProdukController@tambah');
Route::post('AksiTambahProduk','CrudProdukController@store');
Route::get('UbahProduk{id_user}','CrudProdukController@ubah');
Route::put('AksiUbahProduk{id_user}','CrudProdukController@update');
Route::get('HapusProduk{id_user}','CrudProdukController@delete');

Route::get('CrudJenisProduk','CrudJenisProdukController@tampil_data');

Route::get('CrudKelas','CrudKelasController@tampil_data');

Route::get('CrudJadwal','CrudJadwalController@tampil_data');

Route::get('CrudProduk','CrudProdukController@tampil_data');

Route::get('CrudPendaftaran','CrudPendaftaranController@tampil_data');

?>