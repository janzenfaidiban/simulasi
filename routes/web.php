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


Route::get('/login/moses/kilang', function () {
    return view('login.login');
});

Auth::routes();
// log in
Route::post('/login', 'Auth\LoginallController@masuk')->name('login');
Route::get('/logout', 'Auth\LoginallController@keluar')->name('logout.system');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');



Route::group(
    ['middleware' => ['role:supervisor']],
     function () {

     Route::get('/supervisor/dashboard','Supervisor\DashboardController@index')->name('dashboard.supervisor');

     // Pengguna 
    Route::get('/pengguna','Supervisor\PenggunaController@index')->name('pengguna.index');
    Route::get('/pengguna/create','Supervisor\PenggunaController@create')->name('pengguna.create');
    Route::post('/pengguna/store','Supervisor\PenggunaController@store')->name('pengguna.store');
    Route::get('/pengguna/edit/{id}/edit','Supervisor\PenggunaController@edit')->name('pengguna.edit');
    Route::patch('/pengguna/update/{id}','Supervisor\PenggunaController@update')->name('pengguna.update');
    Route::delete('/pengguna/delete/{id}','Supervisor\PenggunaController@destroy')->name('pengguna.delete');

     }
);



Route::group(
    ['middleware' => ['Cashier:cashier']],
     function () {

     Route::get('/cashier/dashboard','Cashier\DashboardController@index')->name('dashboard.cashier');

    //  outgoing
     Route::get('/cashier/outgoing/index','Cashier\OutgoingController@index')->name('cashier.outgoing.index');
     Route::get('/cashier/outgoing/transaksi','Cashier\OutgoingController@transaksi')->name('cashier.outgoing.transaksi');
     Route::get('/cashier/outgoing/btb','Cashier\OutgoingController@btb')->name('cashier.outgoing.btb');

    //  Incoming
     Route::get('/cashier/incoming/index','Cashier\IncomingController@index')->name('cashier.incoming.index');
     Route::get('/cashier/incoming/transaksi','Cashier\IncomingController@transaksi')->name('cashier.incoming.transaksi');
     Route::get('/cashier/incoming/ttb','Cashier\IncomingController@ttb')->name('cashier.incoming.ttb');
     Route::get('/cashier/incoming/edit','Cashier\IncomingController@edit')->name('cashier.incoming.edit');


     }
);

Route::group(
    ['middleware' => ['Cashier:acceptance']],
     function () {

     Route::get('/acceptance/dashboard','Acceptance\DashboardController@index')->name('dashboard.acceptance');

    //  outgoing
     Route::get('/acceptance/outgoing/index','Acceptance\OutgoingController@index')->name('acceptance.index');
     Route::get('/acceptance/outgoing/create','Acceptance\OutgoingController@create')->name('acceptance.create');
     Route::get('/acceptance/outgoing/create/transaksi','Acceptance\OutgoingController@create_transaksi')->name('acceptance.create.transaksi');
     Route::get('/acceptance/outgoing/transaksi','Acceptance\OutgoingController@transaksi')->name('acceptance.transaksi');
     Route::get('/acceptance/outgoing/btb','Acceptance\OutgoingController@btb')->name('acceptance.btb');
     Route::get('/acceptance/outgoing/edit','Acceptance\OutgoingController@edit')->name('acceptance.edit');


    //  Incoming
     Route::get('/acceptance/incoming/index','Acceptance\IncomingController@index')->name('acceptance.incoming.index');
     Route::get('/acceptance/incoming/create','Acceptance\IncomingController@create')->name('acceptance.incoming.create');
     Route::get('/acceptance/incoming/create/transaksi','Acceptance\IncomingController@create_transaksi_incoming')->name('acceptance.incoming.create.transaksi');
     Route::get('/acceptance/incoming/transaksi','Acceptance\IncomingController@transaksi_incoming')->name('acceptance.incoming.transaksi');
     Route::get('/acceptance/incoming/ttb','Acceptance\IncomingController@ttb')->name('acceptance.incoming.ttb');
     Route::get('/acceptance/incoming/edit','Acceptance\IncomingController@edit')->name('acceptance.incoming.edit');


     }
);