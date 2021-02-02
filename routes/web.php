

<?php

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
    return view('welcome');
});

Route::get('/dashboard','AdminController@dashboard');

Route::get('/fcm', "FirebaseController@index");
Route::get('/send-notification', "FirebaseController@sendNotification");

//Membuat Login
Route::get('login', [
    'uses' => 'LoginController@login',
    'as' => 'login'
]);

Route::post('cek-login', [
    'uses' => 'LoginController@ceklogin',
    'as' => 'cek.login'
]);

//Route Keluar
Route::get('logout', [
    'uses' => 'LoginController@logout',
    'as' => 'logout'
]);

//Middleware nanti akan mengecek apakah user sudah login atau belum, Jika sudah maka akan dilanjutkan tapi jika belum maka akan diarahkan ke halaman login
Route::group(['middleware' => 'auth'], function() {
    //Route Peserta
    Route::get('peserta', [
        'uses' => 'PesertaController@index', //Nama Controller
        'as' => 'peserta.index' //Nama Alias
    ]);
    Route::get('peserta/create', [
        'uses' => 'PesertaController@create',
        'as' => 'peserta.create'
    ]);
    Route::post('peserta/store', [
        'uses' => 'PesertaController@store',
        'as' => 'peserta.store'
    ]);
    Route::get('peserta/{peserta}/edit', [ //Tambahkan Parameter peserta
        'uses' => 'PesertaController@edit',
        'as' => 'peserta.edit'
    ]);
    Route::post('peserta/{peserta}/update', [
        'uses' => 'PesertaController@update',
        'as' => 'peserta.update'
    ]);
    Route::get('peserta/{peserta}/destroy', [
        'uses' => 'PesertaController@delete',
        'as' => 'peserta.destroy'
    ]);
    //Akhir Route Peserta

    //Route Jadwal
    Route::get('jadwal', [
        'uses' => 'JadwalController@index', //Nama Controller
        'as' => 'jadwal.index' //Nama Alias
    ]);
    Route::get('jadwal/create', [
        'uses' => 'JadwalController@create',
        'as' => 'jadwal.create'
    ]);
    Route::post('jadwal/store', [
        'uses' => 'JadwalController@store',
        'as' => 'jadwal.store'
    ]);
    Route::get('jadwal/{jadwal}/edit', [ //Tambahkan Parameter karyawan
        'uses' => 'JadwalController@edit',
        'as' => 'jadwal.edit'
    ]);
    Route::post('jadwal/{jadwal}/update', [
        'uses' => 'JadwalController@update',
        'as' => 'jadwal.update'
    ]);
    Route::get('jadwal/{jadwal}/destroy', [
        'uses' => 'JadwalController@delete',
        'as' => 'jadwal.destroy'
    ]);
    //Akhir Route Jadwal

    //Route Karyawan
    Route::get('karyawan', [
        'uses' => 'KaryawanController@index', //Nama Controller
        'as' => 'karyawan.index' //Nama Alias
    ]);
    Route::get('karyawan/create', [
        'uses' => 'KaryawanController@create',
        'as' => 'karyawan.create'
    ]);
    Route::post('karyawan/store', [
        'uses' => 'KaryawanController@store',
        'as' => 'karyawan.store'
    ]);
    Route::get('karyawan/{karyawan}/edit', [ //Tambahkan Parameter karyawan
        'uses' => 'KaryawanController@edit',
        'as' => 'karyawan.edit'
    ]);
    Route::post('karyawan/{karyawan}/update', [
        'uses' => 'KaryawanController@update',
        'as' => 'karyawan.update'
    ]);
    Route::get('karyawan/{karyawan}/destroy', [
        'uses' => 'KaryawanController@delete',
        'as' => 'karyawan.destroy'
    ]);
    //Akhir Route Karyawan
}); //akhir middleware


Route::get("/firebase-test",function(){
    return view("firebasetest");
});

Route::get("wisnu",function(){
    return "wisnu";
});
