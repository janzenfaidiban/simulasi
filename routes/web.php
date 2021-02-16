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


Auth::routes();
// log in
Route::post('/login', 'Auth\LoginallController@masuk')->name('login');
Route::get('/logout', 'Auth\LoginallController@keluar')->name('logout.system');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/ganti/password', 'HomeController@ganti_password')->name('password.settings');
Route::post('/password/update', 'HomeController@password_update')->name('password.update');


Route::group(
    ['middleware' => ['Supervisor:supervisor']],
     function () {

     Route::get('/supervisor/dashboard','Supervisor\DashboardController@index')->name('dashboard.supervisor');

    // Outgoing
    Route::get('/supervisor/outgoing','Supervisor\OutgoingController@index')->name('dashboard.outgoing');


    // Incoming
    Route::get('/supervisor/incoming','Supervisor\IncomingController@index')->name('dashboard.incoming');


     // Pengguna 
    Route::get('/supervisor/pengguna','Supervisor\PenggunaController@index')->name('pengguna.index');
    Route::get('/supervisor/pengguna/tambah','Supervisor\PenggunaController@create')->name('pengguna.create');
    Route::post('/supervisor/pengguna/store','Supervisor\PenggunaController@store')->name('pengguna.store');
    Route::get('/supervisor/pengguna/edit/{id}','Supervisor\PenggunaController@edit')->name('pengguna.edit');
    Route::patch('/supervisor/pengguna/update/{id}','Supervisor\PenggunaController@update')->name('pengguna.update');
    Route::delete('/supervisor/pengguna/delete/{id}','Supervisor\PenggunaController@destroy')->name('pengguna.delete');


    // Pelanggan 
    Route::get('/supervisor/pelanggan','Supervisor\PelangganController@index')->name('pelanggan.index');
    Route::get('/supervisor/pelanggan/tambah','Supervisor\PelangganController@create')->name('pelanggan.create');
    Route::post('/supervisor/pelanggan/store','Supervisor\PelangganController@store')->name('pelanggan.store');
    Route::get('/supervisor/pelanggan/edit/{id}','Supervisor\PelangganController@edit')->name('pelanggan.edit');
    Route::patch('/supervisor/pelanggan/update/{id}','Supervisor\PelangganController@update')->name('pelanggan.update');
    Route::delete('/supervisor/pelanggan/delete/{id}','Supervisor\PelangganController@destroy')->name('pelanggan.delete');

    // Bandar Udara 
    Route::get('/supervisor/bandarudara','Supervisor\BandarUdaraController@index')->name('bandarudara.index');
    Route::get('/supervisor/bandarudara/tambah','Supervisor\BandarUdaraController@create')->name('bandarudara.create');
    Route::post('/supervisor/bandarudara/store','Supervisor\BandarUdaraController@store')->name('bandarudara.store');
    Route::get('/supervisor/bandarudara/edit/{id}','Supervisor\BandarUdaraController@edit')->name('bandarudara.edit');
    Route::patch('/supervisor/bandarudara/update/{id}','Supervisor\BandarUdaraController@update')->name('bandarudara.update');
    Route::delete('/supervisor/bandarudara/delete/{id}','Supervisor\BandarUdaraController@destroy')->name('bandarudara.delete');

    // Comudity
    Route::get('/supervisor/comudity','Supervisor\ComudityController@index')->name('comudity.index');
    Route::get('/supervisor/comudity/tambah','Supervisor\ComudityController@create')->name('comudity.create');
    Route::post('/supervisor/comudity/store','Supervisor\ComudityController@store')->name('comudity.store');
    Route::get('/supervisor/comudity/edit/{id}','Supervisor\ComudityController@edit')->name('comudity.edit');
    Route::patch('/supervisor/comudity/update/{id}','Supervisor\ComudityController@update')->name('comudity.update');
    Route::delete('/supervisor/comudity/delete/{id}','Supervisor\ComudityController@destroy')->name('comudity.delete');

    // Pengaturan 
    Route::get('/supervisor/pengaturan','Supervisor\PengaturanController@index')->name('pengaturan.index');
    Route::get('/supervisor/pengaturan/tambah','Supervisor\PengaturanController@create')->name('pengaturan.create');
    Route::post('/supervisor/pengaturan/store','Supervisor\PengaturanController@store')->name('pengaturan.store');
    Route::get('/supervisor/pengaturan/edit/{id}','Supervisor\PengaturanController@edit')->name('pengaturan.edit');
    Route::patch('/supervisor/pengaturan/update/{id}','Supervisor\PengaturanController@update')->name('pengaturan.update');
    Route::delete('/supervisor/pengaturan/delete/{id}','Supervisor\PengaturanController@destroy')->name('pengaturan.delete');






     }
);



Route::group(
    ['middleware' => ['Cashier:cashier']],
     function () {

     Route::get('/cashier/dashboard','Cashier\DashboardController@index')->name('dashboard.cashier');

    //  outgoing
     Route::get('/cashier/outgoing','Cashier\OutgoingController@index')->name('cashier.outgoing.index');
     Route::get('/cashier/outgoing/transaksi','Cashier\OutgoingController@transaksi')->name('cashier.outgoing.transaksi');
     Route::get('/cashier/outgoing/btb','Cashier\OutgoingController@btb')->name('cashier.outgoing.btb');

    //  Incoming
     Route::get('/cashier/incoming','Cashier\IncomingController@index')->name('cashier.incoming.index');
     Route::get('/cashier/incoming/transaksi','Cashier\IncomingController@transaksi')->name('cashier.incoming.transaksi');
     Route::get('/cashier/incoming/ttb','Cashier\IncomingController@ttb')->name('cashier.incoming.ttb');
     Route::get('/cashier/incoming/edit','Cashier\IncomingController@edit')->name('cashier.incoming.edit');


     }
);

Route::group(
    ['middleware' => ['Acceptance:acceptance']],
     function () {

     Route::get('/acceptance/dashboard','Acceptance\DashboardController@index')->name('dashboard.acceptance');

    //  outgoing
     Route::get('/acceptance/outgoing','Acceptance\OutgoingController@index')->name('acceptance.outgoing.index');
     Route::get('/acceptance/outgoing/tambah','Acceptance\OutgoingController@create')->name('acceptance.outgoing.create');
     Route::get('/acceptance/outgoing/tambah/transaksi','Acceptance\OutgoingController@create_transaksi')->name('acceptance.create.outgoing.transaksi');
     Route::get('/acceptance/outgoing/edit/transaksi','Acceptance\OutgoingController@edit_transaksi')->name('acceptance.outgoing.edit.transaksi');
     Route::get('/acceptance/outgoing/transaksi','Acceptance\OutgoingController@transaksi')->name('acceptance.outgoing.transaksi');
     Route::get('/acceptance/outgoing/btb','Acceptance\OutgoingController@btb')->name('acceptance.outgoing.btb');
     Route::get('/acceptance/outgoing/edit','Acceptance\OutgoingController@edit')->name('acceptance.outgoing.edit');


    //  Incoming
     Route::get('/acceptance/incoming','Acceptance\IncomingController@index')->name('acceptance.incoming.index');
     Route::get('/acceptance/incoming/tambah','Acceptance\IncomingController@create')->name('acceptance.incoming.create');
     Route::get('/acceptance/incoming/tambah/transaksi','Acceptance\IncomingController@create_transaksi_incoming')->name('acceptance.incoming.create.transaksi');
     Route::get('/acceptance/incoming/edit/transaksi','Acceptance\IncomingController@edit_transaksi_incoming')->name('acceptance.incoming.edit.transaksi');
     Route::get('/acceptance/incoming/transaksi','Acceptance\IncomingController@transaksi_incoming')->name('acceptance.incoming.transaksi');
     Route::get('/acceptance/incoming/ttb','Acceptance\IncomingController@ttb')->name('acceptance.incoming.ttb');
     Route::get('/acceptance/incoming/edit','Acceptance\IncomingController@edit')->name('acceptance.incoming.edit');


     }
);

